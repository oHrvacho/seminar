@extends('layouts.index')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form accept-charset="UTF-8" role="form" method="post" action="">
                    <fieldset>
                    <div class="panel panel-default">
                        <div class="panel-heading">Molimo vas da ispunite upitnik kako bismo znali broj gostiju</div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Vaše ime i prezime:
                            <input type="text" name="guestName">
                        </div>
                        <div class="panel-heading">Planirate li doći s pratnjom?
                            <select name="dateOption" id="dateOption">
                                <option value="DA">DA</option>
                                <option value="NE" selected>NE</option>
                            </select>
                        </div>
                        <div id="div1" class="hide panel-heading">Ime i prezime pratnje:
                            <input type="text" name="dateName">
                        </div>
                        <div class="panel-heading">Imate li djece, do 5 godina?
                            <select name="childOption" id="childOption">
                                <option value="DA">DA</option>
                                <option value="NE" selected>NE</option>
                            </select>
                        </div>
                        <div id="div2" class="hide panel-heading">Broj djece:
                            <input type="text" name="childNum">
                        </div>
                    </div>
                    <button id="submit" type="submit">
                        Pošalji
                    </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@stop