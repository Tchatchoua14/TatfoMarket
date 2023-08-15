@extends('font.master')
@section('title') 
@section('content')
<div class="container" id="account">
  <h2>Mon compte</h2>
  <div class="row">
    <div class="col s12 m6"><a href="donnes personnelles" class="btn-large"><i class="anm anm-user-al" aria-hidden="true"></i> <i class="material-icons left">person</i>Mes Données personnelles</a></div>
    <div class="col s12 m6"><a href="adresse" class="btn-large"><i class="icon anm anm-map-marker-al"></i> <i class="material-icons left">location_on</i>Mes Adresses</a></div>
    <div class="col s12 m6"><a href="commandes" class="btn-large"><i class="material-icons left">shopping_cart</i>Mes Commandes</a></div>
    <div class="col s12 m6"><a href="" class="btn-large"><i class="material-icons left">visibility</i>RGPD</a></div>  
  </div>
</div>
@endsection