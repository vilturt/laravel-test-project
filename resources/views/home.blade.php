@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <h4>Save Document</h4>

                    <form method="GET" action="/storeDocument">
                        @csrf
                        <p style="color: black; font-size: 0.9em;">Give Title of Document to be saved:</p>
                        <input type="text" name="titleOf">
                        <br>
                        <input type="submit" value="Save">
                        </form>
                        <br><hr><br>


                    <h4>Update Document</h4>

                    <form method="POST" action="/updateDocument" name="toUpdate">
                    @csrf
                    <p style="color: black; font-size: 0.9em;">Give Title of Document to be updated:</p>
                    <select>

                        <option selected="selected">Choose Document</option>

                        <?php

                       foreach($documents as $document){

                        ?>

                        <option value="<?php echo $document->title; ?>"><?php echo $document->title; ?></option>

                        <?php

                         }

                        ?>

                    </select>
                    <br>
                    <input type="submit" value="Update">
                    </form>
                    <br><hr><br>

                    <h4>Delete Document</h4>

                    <form method="POST" action="/deleteDocument" name="toDelete">
                    @csrf
                    <p style="color: black; font-size: 0.9em;">Give Title of Document to be deleted:</p>
                    <select>

                        <option selected="selected">Choose Document</option>

                        <?php

                       foreach($documents as $document){

                        ?>

                        <option value="<?php echo $document->title; ?>"><?php echo $document->title; ?></option>

                        <?php

                         }

                        ?>

                    </select>
                    <br>
                    <input type="submit" value="Delete">
                    </form>
                    <br><hr><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
