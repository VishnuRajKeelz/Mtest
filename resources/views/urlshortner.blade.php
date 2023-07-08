@extends('nav')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Url shortener</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><form action="{{route('logout')}}" method="POST"> @csrf<button type="submit" href="#">logout</button></form></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div style="margin-right:px " class="container">
   <br>
   <br>

   <br>
   <br>
    <div class="card">
      <div class="card-header">
        <form id="shorten-form"  method="POST" action="{{route('url_store')}}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" >Submit Link</button>
              </div>
             
            </div>
            @error('link')
                    <div class"" style="color: red;">Link Required</div>
              @enderror
        </form>
      </div>
      <div id="urls-list">
        <!-- URLs list will be populated here dynamically -->
    </div>
      <div id="result">
      <div class="card-body">
      @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
      <table id="link-table" class="table table-bordered table-sm">
                   <thead>
                    <tr>
                        <th>No</th>
                        <th>Short Link</th> 
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                    $i=1;
                  @endphp
                  @foreach ($shortLink as $sl)
                        <tr>
                            <td>{{$i++}}</td>
                            <td><a href="{{ route('urlshortner',$sl->code) }}" target="_blank">{{ route('urlshortner', $sl->code) }}</a></td>
                            <td>{{ $sl->link }}</td>
                            <td>
                            <button class="btn btn-primary copy-button" data-url="{{ $sl->link }}">Copy</button>
                            </td>
                        </tr>
                  @endforeach
                </tbody>
            </table>
      </div>
    </div>
   
</div>
</div>
</div>
    
</body>
<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>

<script src="/assets/js/adminlte.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Copy short URL to clipboard
        $('.copy-button').click(function () {
            var shortUrl = $(this).data('url');
            copyToClipboard(shortUrl);
            alert('Short URL copied to clipboard!');
        });

        function copyToClipboard(text) {
            var dummy = document.createElement('textarea');
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
        }
    });
</script>
 </body>
 </html>





















