<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GerarCurriculo;
Route::get('/',[GerarCurriculo::class,'Home']);
Route::post('/gerarcurriculo',[GerarCurriculo::class,'GerarPdf']);