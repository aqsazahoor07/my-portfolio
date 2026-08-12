<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Feedback;
use App\Mail\ContactReplyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Store contact message
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect back with anchor
    return redirect()->to(url()->previous() . '#contact')
        ->with('success', 'Your message has been sent successfully!');
    }

    // Admin - View all messages
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    // Admin - View single message
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    // ===== REPLY METHOD - Add this =====
    public function reply(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required|string|min:3',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->reply = $request->reply;
        $contact->is_replied = true;
        $contact->replied_at = now();
        $contact->save();

        // Send email
        try {
            Mail::to($contact->email)->send(new ContactReplyMail($contact));
            return back()->with('success', 'Reply sent successfully! Email has been sent to the user.');
        } catch (\Exception $e) {
            return back()->with('warning', 'Reply saved but email could not be sent. Error: ' . $e->getMessage());
        }
    }

    // Admin - Mark as read
    public function markAsRead($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = true;
        $contact->save();

        return back()->with('success', 'Message marked as read.');
    }

    // Admin - Delete message
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return back()->with('success', 'Message deleted successfully.');
    }

    // ===== FEEDBACK METHODS =====

    // Store feedback
    public function storeFeedback(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|min:5',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->to(url()->previous() . '#feedback')
        ->with('feedback_success', 'Thank you for your feedback! It will be shown after approval.');
    }

    // Admin - View all feedbacks
    public function feedbackIndex()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    // Admin - Approve feedback
    public function approveFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->is_approved = true;
        $feedback->save();

        return back()->with('success', 'Feedback approved successfully.');
    }

    // Admin - Delete feedback
    public function deleteFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return back()->with('success', 'Feedback deleted successfully.');
    }

    // Get approved feedbacks for frontend
    public function getFeedbacks()
    {
        return Feedback::where('is_approved', true)
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
    }
}