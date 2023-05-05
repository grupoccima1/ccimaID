<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
    return view('profile.show');
})->name('Profile');

Route::get('/documentos', function(){
    return view('sherpa.gccima');
})->name('gccima');
// circulares
Route::get('/circulares', function(){
    return view('sherpa.circulares');
})->name('circulares');
// 
Route::get('/expedientes', function(){
    return view('sherpa.expedientes');
})->name('expedientes');

Route::get('/documentos/navetec', function(){
    return view('sherpa.navetec');
})->name('doc-navetec');
Route::get('/documentos/habitta', function(){
    return view('sherpa.habitta');
})->name('doc-habitta');


Route::get('/notificaciones', function(){
    return view('sherpa.notification');
})->name('notification'); 
Route::get('/search', function(){
    return view('sherpa.search');
})->name('search');

Route::get('/simulador_navetec', function(){
    return view('simulador.navetec');
})->name('sim_navetec');
Route::get('/simulador_confirmacion', function(){
    return view('simulador.confirmacion');
})->name('sim_confirmacion');
Route::get('/simulador_porttoblanco', function(){
    return view('simulador.porttoblanco');
})->name('sim_porttoblanco');

Route::get('/mkt', function(){
    return view('mkt.home');
})->name('mkt_home');

Route::get('/mkt/buyer', function(){
    return view('mkt.buyer');
})->name('mkt_buyer');

Route::get('/mkt/tutoriales', function(){
    return view('mkt.tutoriales');
})->name('mkt_tutoriales');


/*DISEÑO*/
Route::get('/design', function(){
    return view('design.home');
})->name('design');

Route::get('/design/ccima', function(){
    return view('design.gccima');
})->name('design_ccima');
Route::get('/design/navetec', function(){   
    return view('design.ccima');
})->name('design_navetec');
Route::get('/design/porttoblanco', function(){
    return view('design.porttoblanco');
   })->name('design_porttoblanco');
Route::get('/design/sherpa', function(){
    return view('design.sherpa');
})->name('design_sherpa');
Route::get('/design/ccima/logos', function(){
    return view('design.ccima_logos');
})->name('design_ccima_logos');
Route::get('/design/ccima/cards', function(){
    return view('design.ccima_cards');
})->name('design_ccima_cards');
Route::get('/design/ccima/multimedia', function(){
    return view('design.ccima_multimedia');
})->name('design_ccima_multimedia');
Route::get('/design/ccima/manual', function(){
    return view('design.ccima_manual');
})->name('design_ccima_manual');
Route::get('/design/navetec/logos', function(){
    return view('design.navetec_logos');
})->name('design_navetec_logos');
Route::get('/design/navetec/fotos', function(){
    return view('design.navetec_fotos');
})->name('design_navetec_fotos');
Route::get('/design/porttoblanco/logos', function(){
    return view('design.porttoblanco_logos');
})->name('design_porttoblanco_logos');
Route::get('/design/porttoblanco/videos', function(){
    return view('design.porttoblanco_videos');
})->name('design_porttoblanco_videos');
Route::get('/design/sherpa/logos', function(){
    return view('design.sherpa_logos');
})->name('design_sherpa_logos');
Route::get('/design/sherpa/videos', function(){
    return view('design.sherpa_videos');
})->name('design_sherpa_videos');

/*MEDIOS*/  
Route::get('/medios/masvistos', function(){
    return view('medios.masvistos');
})->name('medios_masvistos');
Route::get('/medios/recientes', function(){
    return view('medios.recientes');
})->name('medios_recientes');
Route::get('/medios/recomendados', function(){
    return view('medios.recomendados');
})->name('medios_recomendados');
Route::get('/medios/universal', function(){
    return view('medios.universal');
})->name('medios_universal');
Route::get('/medios/financiero', function(){
    return view('medios.financiero');
})->name('medios_financiero');
Route::get('/medios/reforma', function(){
    return view('medios.reforma');
})->name('medios_reforma');
Route::get('/medios/entrepreneur', function(){
    return view('medios.entrepreneur');
})->name('medios_entrepreneur');



/*PorttoBlanco*/
Route::get('/cimatario', function(){
    return view('porttoblanco.cimatario');
})->name('cimatario');

Route::get('/bernal', function(){
    return view('porttoblanco.bernal');
})->name('bernal');

Route::get('/lomasporttoblanco', function(){
    return view('porttoblanco.lomas');
})->name('lomasporttoblanco');

// NAVETEC
Route::get('/aeropuerto', function(){
    return view('navetec.aeropuerto');
})->name('aeropuerto');

Route::get('/beta', function(){
    return view('navetec.beta');
})->name('beta');

Route::get('/calamanda', function(){
    return view('navetec.calamanda');
})->name('calamanda');

Route::get('/celta', function(){
    return view('navetec.celta');
})->name('celta');

Route::get('/gamma', function(){
    return view('navetec.gamma');
})->name('gamma');

Route::get('/gammaii', function(){
    return view('navetec.gammaii');
})->name('gammaii');

Route::get('/pedro-escobedo', function(){
    return view('navetec.escobedo');
})->name('escobedo');

Route::get('/santa-rosa', function(){
    return view('navetec.santa');
})->name('santa');

Route::get('/sur-57', function(){
    return view('navetec.sur');
})->name('sur');



/*PorttoBlanco*/
Route::get('/porttoblanco', function(){
    return view('porttoblanco.home');
})->name('porttoblanco');
Route::get('/porttoblanco-ventas', function(){
    return view('porttoblanco.herramientas');
})->name('porttoblanco-venta');
Route::get('/porttoblanco/cimatario', function(){
    return view('porttoblanco.cimatario');
})->name('porttoblanco_cimatario');



/*PorttoBlanco*/
Route::get('/porttoblanco/cimatario/masterplan', function(){
    return view('porttoblanco.cimatario_masterplan');
})->name('porttoblanco_cimatario_masterplan');
Route::get('/porttoblanco/cimatario/cotizador', function(){
    return view('porttoblanco.cimatario_cotizador');
})->name('porttoblanco_cimatario_cotizador');
Route::get('/porttoblanco/cimatario/simulador', function(){
    return view('porttoblanco.cimatario_simulador');
})->name('porttoblanco_cimatario_simulador');
Route::get('/porttoblanco/cimatario/reglamento', function(){
    return view('porttoblanco.cimatario_reglamento');
})->name('porttoblanco_cimatario_reglamento');
Route::get('/porttoblanco/cimatario/fichas', function(){
    return view('porttoblanco.cimatario_ficha');
})->name('porttoblanco_cimatario_fichas');
Route::get('/porttoblanco/cimatario/precio', function(){
    return view('porttoblanco.cimatario_precio');
})->name('porttoblanco_cimatario_precio');
Route::get('/porttoblanco/cimatario/ubicacion', function(){
    return view('porttoblanco.cimatario_ubicacion');
})->name('porttoblanco_cimatario_ubicacion');

Route::get('/porttoblanco/cimatario/presentacion', function(){
    return view('porttoblanco.cimatario_presentacion');
})->name('porttoblanco_cimatario_presentacion');
Route::get('/porttoblanco/cimatario/flyer', function(){
    return view('porttoblanco.cimatario_flyer');
})->name('porttoblanco_cimatario_flyer');
Route::get('/porttoblanco/cimatario/tecnicas', function(){
    return view('porttoblanco.cimatario_tecnicas');
})->name('porttoblanco_cimatario_tecnicas');
Route::get('/porttoblanco/cimatario/renders', function(){
    return view('porttoblanco.cimatario_renders');
})->name('porttoblanco_cimatario_renders');

/* lomas de PorttoBlanco*/
Route::get('/porttoblanco/lomas/masterplan', function(){
    return view('porttoblanco.lm.lomas_masterplan');
})->name('porttoblanco_lomas_masterplan');
Route::get('/porttoblanco/lomas/cotizador', function(){
    return view('porttoblanco.lm.lomas_cotizador');
})->name('porttoblanco_lomas_cotizador');
Route::get('/porttoblanco/lomas/simulador', function(){
    return view('porttoblanco.lm.lomas_simulador');
})->name('porttoblanco_lomas_simulador');
Route::get('/porttoblanco/lomas/reglamento', function(){
    return view('porttoblanco.lm.lomas_reglamento');
})->name('porttoblanco_lomas_reglamento');
Route::get('/porttoblanco/lomas/fichas', function(){
    return view('porttoblanco.lm.lomas_fichas');
})->name('porttoblanco_lomas_fichas');
Route::get('/porttoblanco/lomas/precio', function(){
    return view('porttoblanco.lm.lomas_precio');
})->name('porttoblanco_lomas_precio');
Route::get('/porttoblanco/lomas/ubicacion', function(){
    return view('porttoblanco.lm.lomas_ubicacion');
})->name('porttoblanco_lomas_ubicacion');
Route::get('/porttoblanco/lomas/presentacion', function(){
    return view('porttoblanco.lm.lomas_presentacion');
})->name('porttoblanco_lomas_presentacion');
Route::get('/porttoblanco/lomas/flyer', function(){
    return view('porttoblanco.lm.lomas_flyer');
})->name('porttoblanco_lomas_flyer');
Route::get('/porttoblanco/lomas/tecnicas', function(){
    return view('porttoblanco.lm.lomas_tecnicas');
})->name('porttoblanco_lomas_tecnicas');
Route::get('/porttoblanco/lomas/renders', function(){
    return view('porttoblanco.lm.lomas_renders');
})->name('porttoblanco_lomas_renders');

/*PorttoBlanco  Bernal*/
Route::get('/porttoblanco/bernal/masterplan', function(){
    return view('porttoblanco.brl.bernal_masterplan');
})->name('porttoblanco_bernal_masterplan');
Route::get('/porttoblanco/bernal/cotizador', function(){
    return view('porttoblanco.brl.bernal_cotizador');
})->name('porttoblanco_bernal_cotizador');
Route::get('/porttoblanco/bernal/simulador', function(){
    return view('porttoblanco.brl.bernal_simulador');
})->name('porttoblanco_bernal_simulador');
Route::get('/porttoblanco/bernal/reglamento', function(){
    return view('porttoblanco.brl.bernal_reglamento');
})->name('porttoblanco_bernal_reglamento');
Route::get('/porttoblanco/bernal/fichas', function(){
    return view('porttoblanco.brl.bernal_ficha');
})->name('porttoblanco_bernal_fichas');
Route::get('/porttoblanco/bernal/precio', function(){
    return view('porttoblanco.brl.bernal_precio');
})->name('porttoblanco_bernal_precio');
Route::get('/porttoblanco/bernal/ubicacion', function(){
    return view('porttoblanco.brl.bernal_ubicacion');
})->name('porttoblanco_bernal_ubicacion');
Route::get('/porttoblanco/bernal/presentacion', function(){
    return view('porttoblanco.brl.bernal_presentacion');
})->name('porttoblanco_bernal_presentacion');
Route::get('/porttoblanco/bernal/flyer', function(){
    return view('porttoblanco.brl.bernal_flyer');
})->name('porttoblanco_bernal_flyer');
Route::get('/porttoblanco/bernal/tecnicas', function(){
    return view('porttoblanco.brl.bernal_tecnicas');
})->name('porttoblanco_bernal_tecnicas');
Route::get('/porttoblanco/bernal/renders', function(){
    return view('porttoblanco.brl.bernal_renders');
})->name('porttoblanco_bernal_renders');
Route::get('/porttoblanco/bernal/amenidades', function(){
    return view('porttoblanco.brl.bernal_amenidades');
})->name('porttoblanco_bernal_amenidades');


/*Navetec*/
Route::get('/navetec', function(){
    return view('navetec.home');
})->name('navetec');
Route::get('/navetec_ventas', function(){
    return view('navetec.herramientas');
})->name('navetec-ventas');

/*AEROPUERTO*/
Route::get('/navetec/aeropuerto/masterplan', function(){
    return view('navetec.ae.ae_masterplan');
})->name('navetec_aeropuerto_masterplan');
Route::get('/navetec/aeropuerto/cotizador', function(){
    return view('navetec.ae.ae_cotizador');
})->name('navetec_aeropuerto_cotizador');
Route::get('/navetec/aeropuerto/simulador', function(){
    return view('navetec.ae.ae_simulador');
})->name('navetec_aeropuerto_simulador');
Route::get('/navetec/aeropuerto/reglamento', function(){
    return view('navetec.ae.ae_reglamento');
})->name('navetec_aeropuerto_reglamento');
Route::get('/navetec/aeropuerto/fichas', function(){
    return view('navetec.ae.ae_fichas');
})->name('navetec_aeropuerto_fichas');
Route::get('/navetec/aeropuerto/precio', function(){
    return view('navetec.ae.ae_precio');
})->name('navetec_aeropuerto_precio');
Route::get('/navetec/aeropuerto/ubicacion', function(){
    return view('navetec.ae.ae_ubicacion');
})->name('navetec_aeropuerto_ubicacion');
Route::get('/navetec/aeropuerto/presentacion', function(){
    return view('navetec.ae.ae_presentacion');
})->name('navetec_aeropuerto_presentacion');
Route::get('/navetec/aeropuerto/flyer', function(){
    return view('navetec.ae.ae_flyer');
})->name('navetec_aeropuerto_flyer');
Route::get('/navetec/aeropuerto/tecnicas', function(){
    return view('navetec.ae.ae_tecnicas');
})->name('navetec_aeropuerto_tecnicas');
Route::get('/navetec/aeropuerto/renders', function(){
    return view('navetec.ae.ae_renders');
})->name('navetec_aeropuerto_renders');

/*Beta*/
Route::get('/navetec/beta/masterplan', function(){
    return view('navetec.bta.bta_masterplan');
})->name('navetec_beta_masterplan');
Route::get('/navetec/beta/cotizador', function(){
    return view('navetec.bta.bta_cotizador');
})->name('navetec_beta_cotizador');
Route::get('/navetec/beta/simulador', function(){
    return view('navetec.bta.bta_simulador');
})->name('navetec_beta_simulador');
Route::get('/navetec/beta/reglamento', function(){
    return view('navetec.bta.bta_reglamento');
})->name('navetec_beta_reglamento');
Route::get('/navetec/beta/fichas', function(){
    return view('navetec.bta.bta_fichas');
})->name('navetec_beta_fichas');
Route::get('/navetec/beta/precio', function(){
    return view('navetec.bta.bta_precio');
})->name('navetec_beta_precio');
Route::get('/navetec/beta/ubicacion', function(){
    return view('navetec.bta.bta_ubicacion');
})->name('navetec_beta_ubicacion');
Route::get('/navetec/beta/presentacion', function(){
    return view('navetec.bta.bta_presentacion');
})->name('navetec_beta_presentacion');
Route::get('/navetec/beta/flyer', function(){
    return view('navetec.bta.bta_flyer');
})->name('navetec_beta_flyer');
Route::get('/navetec/beta/tecnicas', function(){
    return view('navetec.bta.bta_tecnicas');
})->name('navetec_beta_tecnicas');
Route::get('/navetec/beta/renders', function(){
    return view('navetec.bta.bta_renders');
})->name('navetec_beta_renders');


/*CALAMANDA*/
Route::get('/navetec/calamanda/masterplan', function(){
    return view('navetec.cal.cal_masterplan');
})->name('navetec_calamanda_masterplan');
Route::get('/navetec/calamanda/cotizador', function(){
    return view('navetec.cal.cal_cotizador');
})->name('navetec_calamanda_cotizador');
Route::get('/navetec/calamanda/simulador', function(){
    return view('navetec.cal.cal_simulador');
})->name('navetec_calamanda_simulador');
Route::get('/navetec/calamanda/reglamento', function(){
    return view('navetec.cal.cal_reglamento');
})->name('navetec_calamanda_reglamento');
Route::get('/navetec/calamanda/fichas', function(){
    return view('navetec.cal.cal_fichas');
})->name('navetec_calamanda_fichas');
Route::get('/navetec/calamanda/precio', function(){
    return view('navetec.cal.cal_precio');
})->name('navetec_calamanda_precio');
Route::get('/navetec/calamanda/ubicacion', function(){
    return view('navetec.cal.cal_ubicacion');
})->name('navetec_calamanda_ubicacion');
Route::get('/navetec/calamanda/presentacion', function(){
    return view('navetec.cal.cal_presentacion');
})->name('navetec_calamanda_presentacion');
Route::get('/navetec/calamanda/flyer', function(){
    return view('navetec.cal.cal_flyer');
})->name('navetec_calamanda_flyer');
Route::get('/navetec/calamanda/tecnicas', function(){
    return view('navetec.cal.cal_tecnicas');
})->name('navetec_calamanda_tecnicas');
Route::get('/navetec/calamanda/renders', function(){
    return view('navetec.cal.cal_renders');
})->name('navetec_calamanda_renders');

/*CELTA*/
Route::get('/navetec/celta/masterplan', function(){
    return view('navetec.cel.cel_masterplan');
})->name('navetec_celta_masterplan');
Route::get('/navetec/celta/cotizador', function(){
    return view('navetec.cel.cel_cotizador');
})->name('navetec_celta_cotizador');
Route::get('/navetec/celta/simulador', function(){
    return view('navetec.cel.cel_simulador');
})->name('navetec_celta_simulador');
Route::get('/navetec/celta/reglamento', function(){
    return view('navetec.cel.cel_reglamento');
})->name('navetec_celta_reglamento');
Route::get('/navetec/celta/fichas', function(){
    return view('navetec.cel.cel_fichas');
})->name('navetec_celta_fichas');
Route::get('/navetec/celta/precio', function(){
    return view('navetec.cel.cel_precio');
})->name('navetec_celta_precio');
Route::get('/navetec/celta/ubicacion', function(){
    return view('navetec.cel.cel_ubicacion');
})->name('navetec_celta_ubicacion');
Route::get('/navetec/celta/presentacion', function(){
    return view('navetec.cel.cel_presentacion');
})->name('navetec_celta_presentacion');
Route::get('/navetec/celta/flyer', function(){
    return view('navetec.cel.cel_flyer');
})->name('navetec_celta_flyer');
Route::get('/navetec/celta/tecnicas', function(){
    return view('navetec.cel.cel_tecnicas');
})->name('navetec_celta_tecnicas');
Route::get('/navetec/celta/renders', function(){
    return view('navetec.cel.cel_renders');
})->name('navetec_celta_renders');



/*GAMMA*/
Route::get('/navetec/gamma/masterplan', function(){
    return view('navetec.gma.gma_masterplan');
})->name('navetec_gamma_masterplan');
Route::get('/navetec/gamma/cotizador', function(){
    return view('navetec.gma.gma_cotizador');
})->name('navetec_gamma_cotizador');
Route::get('/navetec/gamma/simulador', function(){
    return view('navetec.gma.gma_simulador');
})->name('navetec_gamma_simulador');
Route::get('/navetec/gamma/reglamento', function(){
    return view('navetec.gma.gma_reglamento');
})->name('navetec_gamma_reglamento');
Route::get('/navetec/gamma/fichas', function(){
    return view('navetec.gma.gma_fichas');
})->name('navetec_gamma_fichas');
Route::get('/navetec/gamma/precio', function(){
    return view('navetec.gma.gma_precio');
})->name('navetec_gamma_precio');
Route::get('/navetec/gamma/ubicacion', function(){
    return view('navetec.gma.gma_ubicacion');
})->name('navetec_gamma_ubicacion');
Route::get('/navetec/gamma/presentacion', function(){
    return view('navetec.gma.gma_presentacion');
})->name('navetec_gamma_presentacion');
Route::get('/navetec/gamma/flyer', function(){
    return view('navetec.gma.gma_flyer');
})->name('navetec_gamma_flyer');
Route::get('/navetec/gamma/tecnicas', function(){
    return view('navetec.gma.gma_tecnicas');
})->name('navetec_gamma_tecnicas');
Route::get('/navetec/gamma/renders', function(){
    return view('navetec.cel.cel_renders');
})->name('navetec_gamma_renders');


/*GAMMAII*/
Route::get('/navetec/gammaii/masterplan', function(){
    return view('navetec.gii.gii_masterplan');
})->name('navetec_gammaii_masterplan');
Route::get('/navetec/gammaii/cotizador', function(){
    return view('navetec.gii.gii_cotizador');
})->name('navetec_gammaii_cotizador');
Route::get('/navetec/gammaii/simulador', function(){
    return view('navetec.gii.gii_simulador');
})->name('navetec_gammaii_simulador');
Route::get('/navetec/gammaii/reglamento', function(){
    return view('navetec.gii.gii_reglamento');
})->name('navetec_gammaii_reglamento');
Route::get('/navetec/gammaii/fichas', function(){
    return view('navetec.gii.gii_fichas');
})->name('navetec_gammaii_fichas');
Route::get('/navetec/gammaii/precio', function(){
    return view('navetec.gii.gii_precio');
})->name('navetec_gammaii_precio');

Route::get('/navetec/gammaii/ubicacion', function(){
    return view('navetec.gii.gii_ubicacion');
})->name('navetec_gammaii_ubicacion');
Route::get('/navetec/gammaii/presentacion', function(){
    return view('navetec.gii.gii_presentacion');
})->name('navetec_gammaii_presentacion');
Route::get('/navetec/gammaii/flyer', function(){
    return view('navetec.gii.gii_flyer');
})->name('navetec_gammaii_flyer');
Route::get('/navetec/gammaii/tecnicas', function(){
    return view('navetec.gii.gii_tecnicas');
})->name('navetec_gammaii_tecnicas');
Route::get('/navetec/gammaii/renders', function(){
    return view('navetec.gii.gii_renders');
})->name('navetec_gammaii_renders');

/*PEDRO ESCOBEDO*/
Route::get('/navetec/pedroescobedo/masterplan', function(){
    return view('navetec.pe.pe_masterplan');
})->name('navetec_pedroescobedo_masterplan');
Route::get('/navetec/pedroescobedo/cotizador', function(){
    return view('navetec.pe.pe_cotizador');
})->name('navetec_pedroescobedo_cotizador');
Route::get('/navetec/pedroescobedo/simulador', function(){
    return view('navetec.pe.pe_simulador');
})->name('navetec_pedroescobedo_simulador');
Route::get('/navetec/pedroescobedo/reglamento', function(){
    return view('navetec.pe.pe_reglamento');
})->name('navetec_pedroescobedo_reglamento');
Route::get('/navetec/pedroescobedo/fichas', function(){
    return view('navetec.pe.pe_fichas');
})->name('navetec_pedroescobedo_fichas');
Route::get('/navetec/pedroescobedo/precio', function(){
    return view('navetec.pe.pe_precio');
})->name('navetec_pedroescobedo_precio');
Route::get('/navetec/pedroescobedo/ubicacion', function(){
    return view('navetec.pe.pe_ubicacion');
})->name('navetec_pedroescobedo_ubicacion');
Route::get('/navetec/pedroescobedo/presentacion', function(){
    return view('navetec.pe.pe_presentacion');
})->name('navetec_pedroescobedo_presentacion');
Route::get('/navetec/pedroescobedo/flyer', function(){
    return view('navetec.pe.pe_flyer');
})->name('navetec_pedroescobedo_flyer');
Route::get('/navetec/pedroescobedo/tecnicas', function(){
    return view('navetec.pe.pe_tecnicas');
})->name('navetec_pedroescobedo_tecnicas');
Route::get('/navetec/pedroescobedo/renders', function(){
    return view('navetec.pe.pe_renders');
})->name('navetec_pedroescobedo_renders');

/*SANTA ROSA*/
Route::get('/navetec/santarosa/masterplan', function(){
    return view('navetec.sta.sta_masterplan');
})->name('navetec_santarosa_masterplan');
Route::get('/navetec/santarosa/cotizador', function(){
    return view('navetec.sta.sta_cotizador');
})->name('navetec_santarosa_cotizador');
Route::get('/navetec/santarosa/simulador', function(){
    return view('navetec.sta.sta_simulador');
})->name('navetec_santarosa_simulador');
Route::get('/navetec/santarosa/reglamento', function(){
    return view('navetec.sta.sta_reglamento');
})->name('navetec_santarosa_reglamento');
Route::get('/navetec/santarosa/fichas', function(){
    return view('navetec.sta.sta_fichas');
})->name('navetec_santarosa_fichas');
Route::get('/navetec/santarosa/precio', function(){
    return view('navetec.sta.sta_precio');
})->name('navetec_santarosa_precio');
Route::get('/navetec/santarosa/ubicacion', function(){
    return view('navetec.sta.sta_ubicacion');
})->name('navetec_santarosa_ubicacion');
Route::get('/navetec/santarosa/presentacion', function(){
    return view('navetec.sta.sta_presentacion');
})->name('navetec_santarosa_presentacion');
Route::get('/navetec/santarosa/flyer', function(){
    return view('navetec.sta.sta_flyer');
})->name('navetec_santarosa_flyer');
Route::get('/navetec/santarosa/tecnicas', function(){
    return view('navetec.sta.sta_tecnicas');
})->name('navetec_santarosa_tecnicas');
Route::get('/navetec/santarosa/renders', function(){
    return view('navetec.sta.sta_renders');
})->name('navetec_santarosa_renders');

/*server San Luis Potosi*/
Route::get('/navetec/server/masterplan', function(){
    return view('navetec.slp.slp_masterplan');
})->name('navetec_server_masterplan');
Route::get('/navetec/server/cotizador', function(){
    return view('navetec.slp.slp_cotizador');
})->name('navetec_server_cotizador');
Route::get('/navetec/server/simulador', function(){
    return view('navetec.slp.slp_simulador');
})->name('navetec_server_simulador');
Route::get('/navetec/server/reglamento', function(){
    return view('navetec.slp.slp_reglamento');
})->name('navetec_server_reglamento');
Route::get('/navetec/server/fichas', function(){
    return view('navetec.slp.slp_fichas');
})->name('navetec_server_fichas');
Route::get('/navetec/server/precio', function(){
    return view('navetec.slp.slp_precio');
})->name('navetec_server_precio');

Route::get('/navetec/server/ubicacion', function(){
    return view('navetec.slp.slp_ubicacion');
})->name('navetec_server_ubicacion');
Route::get('/navetec/server/presentacion', function(){
    return view('navetec.slp.slp_presentacion');
})->name('navetec_server_presentacion');
Route::get('/navetec/server/flyer', function(){
    return view('navetec.slp.slp_flyer');
})->name('navetec_server_flyer');
Route::get('/navetec/server/tecnicas', function(){
    return view('navetec.slp.slp_tecnicas');
})->name('navetec_server_tecnicas');
Route::get('/navetec/server/renders', function(){
    return view('navetec.slp.slp_renders');
})->name('navetec_server_renders');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


