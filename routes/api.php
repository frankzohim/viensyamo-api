<?php


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TownController;

use App\Http\Controllers\BannerController;

use App\Http\Controllers\Api\FaqController;

use App\Http\Controllers\CountryController;
use App\Http\Controllers\QuarterController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\CheckEmailController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\VerifyCodeController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Api\FilterAdsController;
use App\Http\Controllers\Api\Admin\StatController;
use App\Http\Controllers\Api\auth\LoginController;
use App\Http\Controllers\Escorts\EscortController;
use App\Http\Controllers\Api\User\LogoutController;
use App\Http\Controllers\Api\Ads\AdsVisitController;
use App\Http\Controllers\Api\Admin\NewUserController;
use App\Http\Controllers\Api\Ads\CreateAdsController;
use App\Http\Controllers\Api\Ads\DeleteAdsController;
use App\Http\Controllers\Api\List\ListRoleController;
use App\Http\Controllers\Api\List\ListSkinController;
use App\Http\Controllers\Api\List\ListTownController;
use App\Http\Controllers\Api\List\ListUserController;
use App\Http\Controllers\Api\Report\ReportController;
use App\Http\Controllers\Api\List\ListShapeController;
use App\Http\Controllers\Api\PurchaseCreditController;
use App\Http\Controllers\Api\Contact\ContactController;
use App\Http\Controllers\Api\List\ListEthnicController;
use App\Http\Controllers\Api\List\ListHeightController;
use App\Http\Controllers\Api\List\ListWeightController;
use App\Http\Controllers\Api\Search\ResearchController;
use App\Http\Controllers\Api\User\DeleteUserController;
use App\Http\Controllers\Api\User\MyPurchaseController;
use App\Http\Controllers\Api\User\ReviewUserController;
use App\Http\Controllers\Api\User\UpdateUserController;
use App\Http\Controllers\Api\Escort\GetEscortController;
use App\Http\Controllers\Api\List\ListServiceController;
use App\Http\Controllers\Api\User\CurrentUserController;
use App\Http\Controllers\Api\Admin\UpdatePriceController;
use App\Http\Controllers\Api\List\ListQuestionController;
use App\Http\Controllers\Api\User\VerifyAnswerController;
use App\Http\Controllers\Api\Admin\VerifyEscortController;
use App\Http\Controllers\Api\Ads\CreateImageAdsController;
use App\Http\Controllers\Api\User\ChangePasswordController;
use App\Http\Controllers\Api\User\ChoiceQuestionController;
use App\Http\Controllers\Api\User\SuspendAccountController;
use App\Http\Controllers\Api\User\VerifyQuestionController;
use App\Http\Controllers\Api\Admin\GiveCreditUserController;

use App\Http\Controllers\Api\List\ListAdsCategoryController;
use App\Http\Controllers\Api\User\ActivateAccountController;
use App\Http\Controllers\Api\List\ListQuaterByTownController;
use App\Http\Controllers\Api\Membership\MemberShipController;
use App\Http\Controllers\Api\Escort\ProfileCompleteController;

use App\Http\Controllers\Api\Payment\CoolPayPaymentController;
use App\Http\Controllers\Payment\PaymentCurrentUserController;
use App\Http\Controllers\Api\Escort\CreateImageEscortController;

use App\Http\Controllers\Api\User\SubscribeWithCreditController;
use App\Http\Controllers\Api\Escort\AttachEscortServiceController;
use App\Http\Controllers\Api\Membership\CheckSubscriptionController;
use App\Http\Controllers\Api\Escort\EscortIsCompletedOrNotController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('callback/ads',[CoolPayPaymentController::class,'callbackAds']);
Route::post('callback/credits',[CoolPayPaymentController::class,'callbackCredits']);
Route::post('callback/plan',[CoolPayPaymentController::class,'callbackPlan']);
Route::get('check/pay/credits',[CheckSubscriptionController::class,'checkPayCredit']);
Route::get('check/pay/plan',[CheckSubscriptionController::class,'checkPayPlan']);
Route::post('purchaseCredit/{price}/{user_id}/{transaction_id}',[PurchaseCreditController::class,'purchaseCredit']);
Route::post('/subscribe/member/momo/{user_id}/{transaction_id}',[MyPurchaseController::class,'subscribeUserWithMomo']);
Route::post('verify/payment/{user_id}/{transaction_id}/{memberShip_id}/{announcement_id}',[MyPurchaseController::class,'verify']);
Route::post('init/payment/coolpay/{user_id}/{transaction_ref}/{memberShip_id}/{announcement_id}',[MyPurchaseController::class,'initCoolpay']);
Route::post('init/payment/coolpay/plan/{user_id}/{transaction_ref}',[MyPurchaseController::class,'initCoolpayPlan']);
Route::post('init/payment/credit/{user_id}/{price}/{transaction_ref}/',[MyPurchaseController::class,'initCoolpayCredit']);
Route::get('stats/users',[StatController::class,'users']);
Route::get('stats/escorts',[StatController::class,'escorts']);
Route::get('stats/incomes',[StatController::class,'statIncomes']);
Route::get('stats/announces',[StatController::class,'statAnnounces']);
Route::get('stats/currentWeek',[StatController::class,'statCurrentWeek']);
Route::get('stats/PreviousWeek',[StatController::class,'statPreviousWeek']);
Route::get('stats/statTown',[StatController::class,'statTown']);
Route::get('faqs',[FaqController::class,'faqs']);
Route::get('visit/{id}',[AdsVisitController::class,'visit']);
Route::get('/check-subscribe',[CheckSubscriptionController::class,"check"]);
Route::get('home/annonces',[AnnouncementController::class,"homepageAnnoncement"]);
Route::get('gold/annonces',[AnnouncementController::class,"goldAnnoncement"]);
Route::get('vip/annonces',[AnnouncementController::class,"vipAnnoncement"]);
Route::get('list/reviews/{escortId}',[ReviewUserController::class,'getReview']);
Route::get('/list/categories',[ListAdsCategoryController::class,'list']);
Route::get('/list/ethnics',[ListEthnicController::class,'list']);
Route::get('/list/skinColor',[ListSkinController::class,'list']);
Route::get('/list/towns',[ListTownController::class,'list']);
Route::get('/list/quarterByTown/{id}',[ListQuaterByTownController::class,'list']);
Route::get('/list/shape',[ListShapeController::class,'list']);
Route::get('/list/height',[ListHeightController::class,'list']);
Route::get('/list/weight',[ListWeightController::class,'list']);
Route::get('/list/services',[ListServiceController::class,'list']);
Route::get('/filter/ads',[FilterAdsController::class,'filter']);

// Town GROUP ROUTES
Route::apiResource('/towns', TownController::class);


// Quarter GROUP ROUTES
Route::apiResource('/quarters', QuarterController::class);

// Country GROUP ROUTES
Route::apiResource('/countries', CountryController::class);

Route::get('/displayadsimage/{id}/{path}',[AnnouncementController::class,'displayAdsImage']);
Route::get('/deleteadsimage/{id}/{path}',[AnnouncementController::class,'deleteAdsImage']);
Route::get('/displayVideo/{id}/{path}',[AnnouncementController::class,'displayAdsVideo']);
Route::get('/displayreportimage/{id}/{adsId}',[ReportController::class,'displayReportImage']);


Route::get('/test', function(Request $request){
    return "From the API";
});

Route::get('question/{id}',[ListQuestionController::class,'filter']);
Route::post('question/verify',[VerifyAnswerController::class,'verifyAnswer']);
Route::post('change/password',[ChangePasswordController::class,'resetPassword']);
// SEARCH GROUP ROUTES
Route::prefix('search')->group(function(){

    Route::get('/count/escort/results/{term}',[SearchController::class,'resultEscortCount']);
    Route::get('single/{term}',[ResearchController::class,'search']);

});


// BANNERS GROUP ROUTES
Route::apiResource('/banners', BannerController::class);
Route::get('/displaybanner/{id}',[BannerController::class,'displayBanner']);


// MEMBERSHIP GROUP ROUTES
Route::apiResource('/memberships', MemberShipController::class);
Route::get('/membership/{id}',[MemberShipController::class,'show']);

// CONTACT GROUP ROUTES
Route::apiResource('/contact', ContactController::class);

// ANNOUNCEMENT GROUP ROUTES
Route::apiResource('/announces', AnnouncementController::class);
Route::get('/nonvip-ads',[AnnouncementController::class,'nonVip']);
Route::get('/populars',[AnnouncementController::class,'populars']);
Route::get('/recents',[AnnouncementController::class,'recents']);
Route::get('/announce/{name}/{slug}',[AnnouncementController::class,'getAnnounce']);
Route::get('/announce/similar/{name}/{slug}',[AnnouncementController::class,'getSimilarAds']);
Route::get('/userAds/{id}', [AnnouncementController::class,'AdsByUser']);
Route::get('/adstown/{id}', [AnnouncementController::class,'getAdsByTown']);
Route::get('/adsquarter/{id}', [AnnouncementController::class,'getAdsByQuarter']);
Route::get('/adscategory/{categoryId}', [AnnouncementController::class,'getAdsByCategory']);

Route::delete('/ads/{id}', [DeleteAdsController::class, 'delete']);
Route::delete('users/{id}',[DeleteUserController::class,'delete']);
Route::post('/ads/update', [CreateAdsController::class, 'update']);
Route::post('/ads/image', [CreateImageAdsController::class, 'createImages']);
Route::get('/announcementsTown',[AnnouncementController::class, 'getAnnouncesByTown']);
// Route::get('/announcementsTown',function(){
//     return 'API here';
// });

// REPORT GROUP ROUTES
Route::apiResource('/reports', ReportController::class);


Route::post('checkemail',[CheckEmailController::class,'Checkemail']);
Route::post('verifycode', [VerifyCodeController::class, 'Verifycode']);
Route::post('newpassword', [NewPasswordController:: class, 'Newpassword']);

// LISTING GROUP ROUTES
Route::prefix('list')->group(function(){

    Route::get('/locations', [LocationController::class, 'index']);
    Route::get('/questions',[ListQuestionController::class,'list']);
});


//User Group route
Route::post('/user', [CreateUserController::class, 'createUser']);
Route::post('/verify/phone',[VerifyQuestionController::class,'verify']);


Route::post('/login',[LoginController::class,'login']);

// endpoint simple user
Route::middleware(['auth:api','ban'])->prefix('v1')->group(function(){
    Route::get('/currentUser',[CurrentUserController::class,'currentUser']);
    Route::post('/updateUser',[UpdateUserController::class,'updateUser']);

    Route::post('/choice/questions',[ChoiceQuestionController::class,'choice']);
    Route::post('subscribe/withCredit/{id}/{announcement_id}',[SubscribeWithCreditController::class,'subscribe']);
    Route::post('/logout',[LogoutController::class,'logout']);
    Route::post('init/cool-pay/credit',[CoolPayPaymentController::class,'payCredit']);
    Route::get('purchases/user',[MyPurchaseController::class,'myPurchase']);
    Route::post('init/payment',[MyPurchaseController::class,'initPaymentMomo']);
    Route::get('check/pay/ads',[CheckSubscriptionController::class,'checkPayAds']);
    Route::get('payment/user',[PaymentCurrentUserController::class,'list']);
});

//route admin
Route::middleware(['auth:api','scopes:admin'])->prefix('v1')->group(function(){
    Route::apiResource('faqs',FaqController::class);
    Route::post('update/price',[UpdatePriceController::class]);
    Route::post('give/credit/{id}',[GiveCreditUserController::class,'giveCredit']);
    Route::get('users',[ListUserController::class,'listUser']);
    Route::get('users/ban',[ListUserController::class,'listUserSuspend']);
    Route::get('users/role/{id}',[ListUserController::class,'listUserByRole']);
    Route::get('roles',[ListRoleController::class,'listRole']);
    Route::post('suspend/user/{id}',[SuspendAccountController::class,'ban']);
    Route::post('activate/user/{id}',[ActivateAccountController::class,'activate']);
    Route::post('user/new',[NewUserController::class,'newUser']);
    Route::post('escort/verify',[VerifyEscortController::class,'verifyEscort']);
});

//routes escort
Route::post('/escort/image', [CreateImageEscortController::class, 'createImages']);
Route::middleware(['auth:api','scopes:escort'])->prefix('v1')->group(function(){
    Route::post('/ads', [CreateAdsController::class, 'createAds']);
    Route::post('init/cool-pay',[CoolPayPaymentController::class,'payAds']);
    Route::post('/addProfile',[ProfileCompleteController::class,'addProfile']);
    Route::post('/attach/services',[AttachEscortServiceController::class,'attach']);
    Route::get('/getEscort',[GetEscortController::class,'getEscort']);

});


//routes escort
Route::middleware(['auth:api','scopes:customer'])->prefix('v1')->group(function(){
    Route::post('review/new/{escortId}',[ReviewUserController::class,'addReview']);
    Route::get('get/premium',[MemberShipController::class,'showPremium']);
    Route::post('init/cool-pay/plan',[CoolPayPaymentController::class,'payPlan']);
    Route::post('/subscribe/member',[MyPurchaseController::class,'subscribeUserWithCredit']);
});
