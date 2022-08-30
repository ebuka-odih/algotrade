<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'pages.index')->name('index');
Route::view('/markets', 'pages.market')->name('market');
Route::view('/about', 'pages.about')->name('about');
Route::view('/careers', 'pages.career')->name('career');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/education', 'pages.education')->name('education');
Route::view('/help-center', 'pages.help-center')->name('help-center');
Route::view('/customers', 'pages.customers')->name('customers');
Route::view('/roadmap', 'pages.roadmap')->name('roadmap');
Route::view('/legal-docs', 'pages.legal-docs')->name('legal-docs');
Route::view('/faq', 'pages.faqs')->name('faq');
Route::view('/terms-and-conditions', 'pages.terms')->name('terms');
Route::view('/privacy-and-policy', 'pages.policy')->name('policy');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
include'admin.php';

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
        Route::get('dashboard', "UserController@dashboard")->name('dashboard');

        Route::get('/profile/security', "UserController@security")->name('security');
        Route::post('update/security', "UserController@updateSecurity")->name('updateSecurity');
        Route::get('profile', "UserController@profile")->name('profile');
        Route::post('update/profile', "UserController@updateProfile")->name('updateProfile');

        Route::get('transactions', "TransactionController@transactions")->name('transactions');
        Route::get('transactions/deposit', "TransactionController@deposits")->name('deposits');
        Route::get('transactions/withdraw', "TransactionController@withdrawal")->name('withdrawal');
//        Route::get('transactions/pending', "TransactionController@pending")->name('pending');

        Route::get('deposit', "DepositController@deposit")->name('deposit');
        Route::post('deposit', "DepositController@depositType")->name('depositType');
        Route::get('bank/transfer/deposit', "DepositController@bankTransferAmt")->name('bankTransferAmt');
        Route::post('bank/transfer/deposit', "DepositController@proAmount")->name('proAmount');
        Route::get('/deposit/rate/{id}', "DepositController@showRate")->name('showRate');
        Route::get('/deposit-complete/bank-transfer/{id}', "DepositController@showBankInfo")->name('showBankInfo');
        Route::get('cancelled/deposit/XCRTRD{id}ERTX8F&', "DepositController@cancelDeposit")->name('cancelDeposit');
        Route::post('payment/reference/', "DepositController@paymentReference")->name('paymentReference');


        Route::get('crypto/transfer/deposit', "DepositController@cryptoTransferAmt")->name('cryptoTransferAmt');
        Route::post('crypto/transfer/deposit', "DepositController@proBTCAmount")->name('proBTCAmount');
        Route::get('deposit/payment/QH5H3Q64{id}2GER', "DepositController@payment")->name('payment');
        Route::get('/crypto/rate/{id}', "DepositController@showBTCRate")->name('showBTCRate');
        Route::get('/confirm/crypto-transfer/{id}', "DepositController@confirmBTC")->name('confirmBTC');
        Route::get('/deposit-complete/crypto-transfer/{id}', "DepositController@showBTCInfo")->name('showBTCInfo');

        // Investment Route
//        Route::get('investment', "InvestmentController@investment")->name('investment');

        Route::get('accounts', "WithdrawMethodController@account")->name('accounts');
        Route::get('accounts/details', "WithdrawMethodController@acctDetails")->name('acctDetails');
        Route::post('update/account', "WithdrawMethodController@accountUpdate")->name('accountUpdate');
        Route::post('store/btc/data/', "WithdrawMethodController@storeBTC")->name('storeBTC');

//        Stock Routes
        Route::get('investment/plans', "InvestStockController@stock")->name('stocks');
        Route::get('invest/XST{id}54C', "InvestStockController@invest")->name('invest');
        Route::post('invest/stock', "InvestStockController@investStock")->name('investStock');
        Route::get('investments', "InvestStockController@investment")->name('investment');
        Route::get('investment/transactions', "InvestStockController@transactions")->name('investment.transactions');
        Route::get('investment/profit', "InvestStockController@profit")->name('investment.profit');
        Route::get('investment/transferred', "InvestStockController@transferred")->name('transferred');
//        Route::delete('cancel/deposit/XCRTRD{id}ERTX8F&', "InvestStockController@deleteDeposit")->name('deleteDeposit');


        //        Crypto Routes
        Route::get('crypto/investment/plans', "InvestCryptoController@crypto")->name('crypto');
        Route::get('crypto/invest/XST{id}54C', "InvestCryptoController@invest")->name('invest.crypto');
        Route::post('invest/crypto', "InvestCryptoController@investCrypto")->name('investCrypto');
        Route::get('crypto/investments', "InvestCryptoController@investment")->name('investment.crypto');
        Route::get('crypto/investment/transactions', "InvestCryptoController@transactions")->name('investment.transactions.crypto');
        Route::get('crypto/investment/profit', "InvestCryptoController@profit")->name('investment.profit.crypto');
        Route::get('crypto/investment/transferred', "InvestCryptoController@transferred")->name('transferred.crypto');


        Route::get('referrals', "UserController@all_referrals")->name('all_referrals');

        Route::get('withdraw', "WithdrawalController@withdraw")->name('withdraw');
        Route::post('withdraw', "WithdrawalController@processWithdraw")->name('processWithdraw');
        Route::get('withdrawal/code/{id}', "WithdrawalController@otpcode")->name('otpcode');
        Route::post('withdrawal/code', "WithdrawalController@process_otp")->name('process_otp');

});
