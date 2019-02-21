
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('materialize-css/dist/js/materialize.min');

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown({
    	constrainWidth: false,
    	coverTrigger: false,
    });

    $(".dropdown-content>li>a").css("color", '#3c3c3b');
  });