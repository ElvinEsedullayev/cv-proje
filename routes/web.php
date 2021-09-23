<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\SkillController;
use App\Http\Controllers\Front\ContactController;

use App\Http\Controllers\Back\AnasayfaController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\YonetimController;
use App\Http\Controllers\Back\SocialController;
use App\Http\Controllers\Back\LanguageController;
use App\Http\Controllers\Back\InterestController;
use App\Http\Controllers\Back\EducationController;
use App\Http\Controllers\Back\ExperienceController;
use App\Http\Controllers\Back\PortController;
use App\Http\Controllers\Back\SkillsController;
use App\Http\Controllers\Back\BlogsController;
use App\Http\Controllers\Back\MessageController;
use App\Http\Controllers\Back\ProfileController;
Route::group(['prefix'=>'yonetim'],function(){
      Route::redirect('/','yonetim/login');
      Route::group(['middleware'=>'isLogin'],function(){
                      Route::get('/login',[YonetimController::class,'index'])->name('yonetim.login');
                      Route::post('/login',[YonetimController::class,'login'])->name('login.post');
                      
      });

      Route::get('/logout',[YonetimController::class,'logout'])->name('yonetim.logout');
          Route::group(['middleware'=>'isAdmin'],function(){
                  Route::get('/home',[AnasayfaController::class,'index'])->name('yonetim.home');

                  Route::group(['prefix'=>'user'],function(){
                        Route::get('/',[UserController::class,'index'])->name('yonetim.user');
                        Route::get('/create',[UserController::class,'create'])->name('user.create');
                        Route::post('/create',[UserController::class,'created'])->name('user.created');
                        Route::get('/update/{id}',[UserController::class,'update'])->name('user.update');
                        Route::post('/update/{id}',[UserController::class,'updated'])->name('user.updated');
                        Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
                  });

                        Route::group(['prefix'=>'social'],function(){
                        Route::get('/',[SocialController::class,'index'])->name('yonetim.social');
                        Route::get('/create',[SocialController::class,'create'])->name('social.create');
                        Route::post('/create',[SocialController::class,'created'])->name('social.created');
                        Route::get('/update/{id}',[SocialController::class,'update'])->name('social.update');
                        Route::post('/update/{id}',[SocialController::class,'updated'])->name('social.updated');
                        Route::get('/delete/{id}',[SocialController::class,'delete'])->name('social.delete');
                  });

                        Route::group(['prefix'=>'language'],function(){
                        Route::get('/',[LanguageController::class,'index'])->name('yonetim.language');
                        Route::get('/create',[LanguageController::class,'create'])->name('language.create');
                        Route::post('/create',[LanguageController::class,'created'])->name('language.created');
                        Route::get('/update/{id}',[LanguageController::class,'update'])->name('language.update');
                        Route::post('/update/{id}',[LanguageController::class,'updated'])->name('language.updated');
                        Route::get('/delete/{id}',[LanguageController::class,'delete'])->name('language.delete');
                  });

                        Route::group(['prefix'=>'interest'],function(){
                        Route::get('/',[InterestController::class,'index'])->name('yonetim.interest');
                        Route::get('/create',[InterestController::class,'create'])->name('interest.create');
                        Route::post('/create',[InterestController::class,'created'])->name('interest.created');
                        Route::get('/update/{id}',[InterestController::class,'update'])->name('interest.update');
                        Route::post('/update/{id}',[InterestController::class,'updated'])->name('interest.updated');
                        Route::get('/delete/{id}',[InterestController::class,'delete'])->name('interest.delete');
                  });

                        Route::group(['prefix'=>'education'],function(){
                        Route::get('/',[EducationController::class,'index'])->name('yonetim.education');
                        Route::get('/create',[EducationController::class,'create'])->name('education.create');
                        Route::post('/create',[EducationController::class,'created'])->name('education.created');
                        Route::get('/update/{id}',[EducationController::class,'update'])->name('education.update');
                        Route::post('/update/{id}',[EducationController::class,'updated'])->name('education.updated');
                        Route::get('/delete/{id}',[EducationController::class,'delete'])->name('education.delete');
                  });

                        Route::group(['prefix'=>'experience'],function(){
                        Route::get('/',[ExperienceController::class,'index'])->name('yonetim.experience');
                        Route::get('/create',[ExperienceController::class,'create'])->name('experience.create');
                        Route::post('/create',[ExperienceController::class,'created'])->name('experience.created');
                        Route::get('/update/{id}',[ExperienceController::class,'update'])->name('experience.update');
                        Route::post('/update/{id}',[ExperienceController::class,'updated'])->name('experience.updated');
                        Route::get('/delete/{id}',[ExperienceController::class,'delete'])->name('experience.delete');
                  });

                        Route::group(['prefix'=>'portfolio'],function(){
                        Route::get('/',[PortController::class,'index'])->name('yonetim.portfolio');
                        Route::get('/create',[PortController::class,'create'])->name('portfolio.create');
                        Route::post('/create',[PortController::class,'created'])->name('portfolio.created');
                        Route::get('/update/{id}',[PortController::class,'update'])->name('portfolio.update');
                        Route::post('/update/{id}',[PortController::class,'updated'])->name('portfolio.updated');
                        Route::get('/delete/{id}',[PortController::class,'delete'])->name('portfolio.delete');
                  });

                        Route::group(['prefix'=>'skill'],function(){
                        Route::get('/',[SkillsController::class,'index'])->name('yonetim.skill');
                        Route::get('/create',[SkillsController::class,'create'])->name('skill.create');
                        Route::post('/create',[SkillsController::class,'created'])->name('skill.created');
                        Route::get('/update/{id}',[SkillsController::class,'update'])->name('skill.update');
                        Route::post('/update/{id}',[SkillsController::class,'updated'])->name('skill.updated');
                        Route::get('/delete/{id}',[SkillsController::class,'delete'])->name('skill.delete');
                  });

                        Route::group(['prefix'=>'blog'],function(){
                        Route::get('/',[BlogsController::class,'index'])->name('yonetim.blog');
                        Route::get('/create',[BlogsController::class,'create'])->name('blog.create');
                        Route::post('/create',[BlogsController::class,'created'])->name('blog.created');
                        Route::get('/update/{id}',[BlogsController::class,'update'])->name('blog.update');
                        Route::post('/update/{id}',[BlogsController::class,'updated'])->name('blog.updated');
                        Route::get('/delete/{id}',[BlogsController::class,'delete'])->name('blog.delete');
                  });

                        Route::group(['prefix'=>'message'],function(){
                        Route::get('/',[MessageController::class,'index'])->name('yonetim.message');
                        Route::get('/{id}',[MessageController::class,'goster'])->name('yonetim.message.goster');
                  });

                        Route::group(['prefix'=>'profile'],function(){
                        Route::get('/',[ProfileController::class,'index'])->name('yonetim.profile');
                        //Route::get('/{id}',[MessageController::class,'goster'])->name('yonetim.message.goster');
                  });
                  
          });
          Route::get('/logout',[YonetimController::class,'logout'])->name('yonetim.logout');
});


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blogdetay/{id}',[BlogController::class,'detay'])->name('blog.detay');
Route::get('/skill',[SkillController::class,'index'])->name('skill');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact',[ContactController::class,'send_message'])->name('send.message');


