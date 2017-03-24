@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Pond of Frogs</div>
        <div class="panel-body">
            <div class="ui container">
                <form method="post" action="frog/add" class="ui form">
                    <h4 class="ui dividing header">Create a Frog</h4>
                    <div class="two fields">
                        <div class="field">
                            <input type="text" placeholder="Name" >
                        </div>
                        <div class="field">
                            <input type="text" disabled >
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <select >
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
                        <div class="field">
                            <select >
                                <option value="">Select a Dad</option>
                                <option value="" ></option>
                            </select>
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <select>
                                <option value="">Select a Mom</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="field">
                            <select>
                                <option value="">Single or choose a partner</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>


                    <button class="ui add button">Add Frog</button>
                </form>
            </div>
        </div>
    </div>

@stop()