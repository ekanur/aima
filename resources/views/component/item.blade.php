<div class="col-md-12 komponen">
    <span class="nomor pull-left">{{ $nomor }}</span>
    <div class="deskriptor pull-left">
        <strong>{{ $deskriptor }}</strong>
        
    </div>
     <div class="dropdown pull-right">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
      <b class="fa fa-ellipsis-v"></b>
    </a>
    <ul class="dropdown-menu dropdown-menu-right"> 
          <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
    </ul>
  </div> 
</div>

<div class="col-md-12">
    {{ $input }}
</div>