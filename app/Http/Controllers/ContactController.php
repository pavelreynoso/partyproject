<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\ContactRequest;
    use App\Contact;

    class ContactController extends Controller
    {
        public function index()
        {
            $contacts = Contact::latest()->get();
            return response()->json($contacts);
        }
        public function store(ContactRequest $request)
        {
            $contact = Contact::create($request->all());
            return response()->json($contact, 201);
        }
        public function show($id)
        {
            $contact = Contact::findOrFail($id);
            return response()->json($contact);
        }
        public function update(ContactRequest $request, $id)
        {
            $contact = Contact::findOrFail($id);
            $contact->update($request->all());
            return response()->json($contact, 200);
        }
        public function destroy($id)
        {
            Contact::destroy($id);
            return response()->json(null, 204);
        }
    }
