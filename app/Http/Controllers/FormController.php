<?php

namespace App\Http\Controllers;

use App\Models\Formulaire;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Http\success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexe()
    {
        return view('client.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => 'nullable',
            "prenom" => 'nullable',
            "diplome" =>  ['nullable', 'mimes:png,jpg,jpeg,pdf', 'max:5048'],
            "annee" => 'nullable',
        ]);
        $formulaire = new Formulaire();
        $formulaire->nom = $request->nom;
        $formulaire->prenom = $request->prenom;
        if ($request->diplome) {
            $doc_lm = $request->diplome;
            $lm_name = time() . '.' . $doc_lm->getClientOriginalName();
            $doc_lm->move(public_path("docs/lms"), $lm_name);
            $formulaire->diplome = $lm_name;
        }
        $formulaire->annee = $request->annee;

        $formulaire->save();


        // $mail_data = [
        //     'recipient' => Auth::user()['name'] . ' ' . Auth::user()['pname'], //mail du responsable selectionné
        //     'fromEmail' => Auth::user()['email'],
        //     'fromName' => Auth::user()['name'],
        //     "subject" => "Certification de Diplome",
        //     "titleMessage" => "Document Certifié",
        //     "Diplome" => $formulaire->diplome,
        //     "nom" => $formulaire->nom,
        //     "createdByName" => Auth::user()['name'] . ' ' . Auth::user()['pname'],
        //     "createdByEmail" => Auth::user()['email'],
        // ];
        // Mail::send('admin.plus', $mail_data, function ($message) use ($mail_data) {
        //     $message->to($mail_data['recipient'])
        //         ->from($mail_data['fromEmail'], $mail_data['fromName'])
        //         ->subject($mail_data['subject']);
        return redirect()
            ->back()
            ->with('success', 'Votre document est certifié!');
    }



    public function detailForm()
    {
        $formulaires = DB::table('formulaires')->orderBy("nom", "asc")->paginate(10);
        return view('admin.detail', compact('formulaires'));
    }

    public function detail($id)
    {
        $formulaire = Formulaire::find($id);
        return view('admin.plus', compact('formulaire'));
    }
}