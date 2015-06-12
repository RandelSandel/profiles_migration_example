@extends('app')


@section('content')

Vue page

     <div class="container">
          <div id="tasks">
               @{{ heading }}
          </div>
     </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.11.10/vue.min.js"></script>
<script> src="/js/bundle.js"</script>

@endsection



@stop