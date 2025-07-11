<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\adminPanelController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PayPalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class, 'index']);

Route::get('journals', [JournalController::class, 'journals']);

Route::get('journal-details/{id}', [journalController::class, 'Journals_details']);

Route::get('all_issues/{id}', [JournalController::class, 'allissuesList']);
Route::get('issues/{id}', [journalController::class, 'allIssues']);

Route::get('countDownload/{id}', [JournalController::class, 'countDownload']);

Route::get('/search', [IndexController::class, 'search']);

Route::get('manuscript', [IndexController::class, 'manuscript']);

Route::get('searchManuscript', [IndexController::class, 'searchManuscript']);

Route::get('getIndexing', [IndexController::class,'index']);
Route::get('article/{slug}', [JournalController::class, 'article']);

Route::post('submit_manuscript', [FormController::class, 'submit_manuscript']);

Route::get('about', [IndexController::class, 'aboutUs']);
Route::get('authorGuidlines', [IndexController::class, 'authorGuidlines']);

Route::get('editorsGuidlines', [IndexController::class, 'editorsGuidlines']);
Route::get('reviewersGuidlines', [IndexController::class, 'reviewersGuidlines']);
Route::get('contactUs', [IndexController::class, 'contactUs']);
Route::get('conference' , [adminPanelController::class,'conference']);
Route::get('PublicationEthicsandMalpracticeStatement', [IndexController::class, 'PublicationEthicsandMalpracticeStatement']);
Route::get('ManuscriptPreparationGuidelines', [IndexController::class, 'ManuscriptPreparationGuidelines']);
// Route::get('ResearchGuidelines', [IndexController::class, 'ResearchGuidelines']);
Route::get('APAStyle', [IndexController::class, 'APAStyle']);
Route::get('Writingagoodresearchpaper', [IndexController::class, 'Writingagoodresearchpaper']);
Route::get('GoogleLanguageTranslator', [IndexController::class, 'GoogleLanguageTranslator']);

Route::get('PeerReviewPolicy', [IndexController::class, 'PeerReviewPolicy']);
Route::get('OpenAccessPolicy', [IndexController::class, 'OpenAccessPolicy']);
Route::get('ProcessingFee', [IndexController::class, 'ProcessingFee']);
Route::get('PrivacyPolicy', [IndexController::class, 'PrivacyPolicy']);

Route::get('/Join_editor', function () {
    return view('Join_editor');
});
Route::get('/join_reviewer', function () {
    return view('join_reviewer');
});

Route::post('submit_editor', [FormController::class, 'submit_editor']);
Route::post('submit_reviewer', [FormController::class, 'submit_reviewer']);



//test
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('all-manuscripts', [adminPanelController::class, 'allManuscript']);
Route::get('add-conference', [adminPanelController::class,'addconference']);
Route::get('view-manuscript/{id}', [IndexController::class,'viewmanuscript'])->where('id', '.+');;
// Route::get('update-manuscripts/{mid}/{status}', [adminPanelController::class, 'updateManuscript']);

// admin panel 

Route::group(['middleware'=>['AuthCheck']], function(){
    
    Route::get('login', [adminPanelController::class, 'login']);
    Route::get('admin_index', [adminPanelController::class, 'adminIndex']);
    Route::get('all-manuscript', [adminPanelController::class, 'allManuscript']);
    Route::get('receive-editors', [adminPanelController::class, 'allEditorsRequest']);
    Route::get('receive-reviewers', [adminPanelController::class, 'allReviewerRequest']);
    
    Route::get('journalForm', [adminPanelController::class, 'journalForm']);
    Route::post('addJournal', [adminPanelController::class, 'addJournal']);
    Route::get('indexing', [adminPanelController::class, 'indexing']);
    Route::post('addIndexing', [adminPanelController::class, 'addIndexing']);
    Route::get('indexingList/{id}', [adminPanelController::class, 'indexingList']);
    Route::post('UpdateIndexing', [adminPanelController::class, 'UpdateIndexing']);
    Route::get('DeleteIndexing/{id}', [adminPanelController::class, 'DeleteIndexing']);
    
    
    Route::post('addConferences' , [adminPanelController::class,'addConferenceinsert']);
    Route::get('update-conference/{id}', [adminPanelController::class,'updateconference']);
    Route::get('delete-conference/{id}', [adminPanelController::class,'deleteconference']);
    Route::post('update-conference/update-conference-data/{id}', [adminPanelController::class,'updateconferenceData']);

    Route::get('viewer/{id}', [adminPanelController::class, 'viewer']);
    Route::get('addEditors', [adminPanelController::class, 'addEditors']);
    Route::post('editors', [adminPanelController::class, 'editors']);

    Route::get('delete_editors/{id}', [adminPanelController::class, 'delete_editors']);

    Route::get('edit_editor/{id}', [adminPanelController::class, 'edit_editor']);
    Route::post('edit_editor/updateEditors/{id}', [adminPanelController::class, 'updateEditors']);

    Route::get('add-volume', [adminPanelController::class, 'addVolume']);
    Route::post('addVolume', [adminPanelController::class, 'addVolumeData']);
    Route::get('add-issues/{id}',  [adminPanelController::class, 'addIssues']);
    Route::post('update-issues',  [adminPanelController::class, 'updateIssues']);
    Route::get('delete-issues/{id}', [adminPanelController::class,'deleteissues']);
    

    Route::post('add-issues/{id}', [adminPanelController::class, 'addIssuesData']);

    Route::get('add-article/{id}', [adminPanelController::class, 'addArticle']);

    Route::post('addArticleData/{id}', [adminPanelController::class, 'addArticleData']);

    Route::get('update-article/{id}', [adminPanelController::class, 'updateArticle']);
    Route::post('update-article/update-article-data/{id}', [adminPanelController::class, 'updateArticleData']);

    Route::get('Checkjournals', [adminPanelController::class, 'Checkjournals']);
    Route::get('update-journals/{id}', [adminPanelController::class, 'updateJournals']);
    Route::post('updateJournalsData/{id}', [adminPanelController::class,'updateJournalsData']);
    Route::post('updateJournalPhoto/{id}', [adminPanelController::class,'updateJournalPhoto']);
    Route::get('delete-journals/{id}', [adminPanelController::class,'deleteJournals']);
    Route::get('delete-article/{id}', [adminPanelController::class, 'deleteArticle']);

    // *****************
    Route::get('impact/{id}', [adminPanelController::class,'impact']);
    Route::get('certificate/{id}', [adminPanelController::class,'certificate']);

    Route::post('add-impact', [adminPanelController::class,'addimpact']);
    Route::post('add-certificate', [adminPanelController::class,'addcertificate']);
    
    
    Route::get('delete_certificate/{id}', [adminPanelController::class,'delete_certificate']);
    Route::get('delete_impact/{id}', [adminPanelController::class,'delete_impact']);


    // *****************

    Route::get('book', [adminPanelController::class,'book']);
    Route::post('addBook', [adminPanelController::class,'addBook']);

    // home assets 
    Route::post('changeHomeAsset', [adminPanelController::class,'changeHomeAsset']);


    Route::get('setPages', function(){
        return view('adminpanel.pages.setPages');
    });
    Route::get('addAboutUs', function(){
        return view('adminpanel.pages.addAboutUs');
    });

    Route::get('addpages/{type}', [adminPanelController::class, 'addpages']);
    Route::post('savePageData', [adminPanelController::class, 'savePageData']);
   

});

// Route::post('regis', [adminPanelController::class, 'addAdmin']);
// Route::get('register', [adminPanelController::class, 'regis']);

 Route::post('check', [adminPanelController::class, 'check']);   
 Route::get('logout', [adminPanelController::class, 'logout']);

Route::get('makeSlug', [adminPanelController::class, 'makeSlug']);



// paypal 
Route::get('payment', [PayPalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/checkout', [PayPalController::class, 'checkout'])->name('paypal.checkout');
Route::get('paypal/success', [PayPalController::class, 'success'])->name('paypal.success');
Route::get('paypal/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');

Route::post('/paypal/capture', [PayPalController::class, 'capture'])->name('paypal.capture');










