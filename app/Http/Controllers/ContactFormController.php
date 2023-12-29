<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\Rules\Password;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactForm::paginate(10);
        return view('contact-form.index', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'gender' => 'required',
            'isMemeber' => 'required',
            'isAdult' => 'required',
            'message' => 'required',
        ]);

        if ($validatedData) {
            $contacts = new ContactForm();

            $contacts->name = $request->name;
            $contacts->email = $request->email;
            $contacts->password = Crypt::encryptString($request->password);
            $contacts->gender = $request->gender;
            $contacts->isMemeber = json_encode($request->isMemeber);
            $contacts->isAdult = $request->isAdult;
            $contacts->message = $request->message;
            $contacts->save();
            return redirect()
                ->route('contact-form.index')
                ->with('message', 'contacts successfully created!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactForm $contactForm)
    {
        return view('contact-form.edit', ['contactForm' => $contactForm]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'gender' => 'required',
            'isMemeber' => 'required',
            'isAdult' => 'required',
            'message' => 'required',
        ]);

        if ($validatedData) {
            $contactForm->name = $request->name;
            $contactForm->email = $request->email;
            $contactForm->password = Crypt::encryptString($request->password);
            $contactForm->gender = $request->gender;
            $contactForm->isMemeber = json_encode($request->isMemeber);
            $contactForm->isAdult = $request->isAdult;
            $contactForm->message = $request->message;
            $contactForm->save();
            return redirect()
                ->route('contact-form.index')
                ->with('message', 'contacts successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactForm $contactForm)
    {
        $contactForm->delete();
        return redirect()
        ->route('contact-form.index')
        ->with('message', 'contacts successfully deleted!');
    }
}
