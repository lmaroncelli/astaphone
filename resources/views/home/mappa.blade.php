<div class="row mappa">
  <div class="col-md-3 text-center">
    <div class="sub-title lead3">
       DOVE TROVARCI
    </div>
    <div class="form-group">
      <label>PARTENZA</label>
      <input type="text" class="form-control" placeholder="Via di Tor Fiorenza, 12, Roma" id="partenza" value="{{old('partenza')}}">
    </div>
    <div class="form-group">
      <label>ARRIVO</label>
      <select class="form-control" id="arrivo">
        <option value="Via Alessandro Gambalunga, 82, 47921 Rimini RN">ASTAPHONE</option>
      </select>
    </div>
    <div class="form-group">
      <label>MEZZO</label>
      <select class="form-control" id="mezzo">
       <option value="DRIVING">Auto</option>
       <option value="WALKING">Piedi</option>
       <option value="BICYCLING">Bici</option>
       <option value="TRANSIT">Mezzi pubblici</option>
      </select>
    </div>
    <input id="submitMappa" type="button" class="btn btn-default btn-xs" value="trova percorso sulla mappa">
    <p>
      {!!nl2br($homepage->gm_indirizzo)!!}
    </p>
  </div>
  <div class="col-md-9">
    <div id="map"></div>
  </div>
 </div>
<div id="ancora_posizionamento"></div>
<div class="row istruzioni_mappa">
 <div class="col-md-8">
   <div id="right-panel"></div>
 </div>
 <div class="col-md-2 stampa">
    <a class="btn btn-primary btn-sm btn-stampa" onclick="window.open ('print_directions.html')">
      <i class="fa fa-print"></i> solo direzioni
    </a>
 </div>
<div class="col-md-2 stampa">
  <a class="btn btn-primary btn-sm btn-stampa" onclick="window.open ('print_map.html')">
    <i class="fa fa-print"></i> mappa completa
  </a>
</div>
</div>