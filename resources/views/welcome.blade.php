@extends('layout.master')
@section('content')
<?php session_start();   ?>
@if(isset($_SESSION['message']))
<div class="alert-success alert">{{$_SESSION['message']}}</div>
@endif
           <div class="table-responsive">
             <table class="table">
      
                <tr>
                  <td class="active">Subject</td>
                  <td class="success">Post</td>
                  <td class="warning">Total comments</td>
                  <td class="warning">Created  By</td>
                  <td class="warning">View</td>

                </tr>
             </table>
           </div> 
@stop