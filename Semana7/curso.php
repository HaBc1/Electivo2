<?php


 class curso{
     
     //Definir una clase llamada curso con los siguientes atributos: codigo, nombre, horas y creditos
     var  $codigo;
     var $nombre;
     var $horas;
     var $creditos;
     function __construct($codigo, $nombre, $horas, $creditos) {
         $this->codigo = $codigo;
         $this->nombre = $nombre;
         $this->horas = $horas;
         $this->creditos = $creditos;
     }

     
     function getCodigo() {
         return $this->codigo;
     }

     function getNombre() {
         return $this->nombre;
     }

     function getHoras() {
         return $this->horas;
     }

     function getCreditos() {
         return $this->creditos;
     }

     function setCodigo($codigo) {
         $this->codigo = $codigo;
     }

     function setNombre($nombre) {
         $this->nombre = $nombre;
     }

     function setHoras($horas) {
         $this->horas = $horas;
     }

     function setCreditos($creditos) {
         $this->creditos = $creditos;
     }


 }

