<script type="text/javascript">
  document.write('<button id="getRequestA" type="button" class="success button float-right">Оновити</button>');
</script>
<noscript> <a href="{{URL::route('excerptions')}}">
   <button  type="button" class="success button float-right">Оновити</button>
 </a></noscript>
<a id="link" href="{{URL::route('excerptions')}}/{{ $ex[0]->excerption_id }}">#{{ $ex[0]->excerption_id }}</a>
<br><br>



<div class="row">
    <div class="large-10 large-offset-1">
      <h3 id="excerption" class="text-justify">{!! $ex[0]->excerption_text !!}</h3>
      <br>

      <h4 id="author">{{ $ex[0]->excerption_author }}</h4>
  </div>
</div>


<style>
h4#author:before{content: '\2014 \0020';}
h4#author{font-style: italic;}
</style>

<br>



<?
if (isset($ex[0]->excerption_id) && !empty($ex[0]->excerption_id)) {
  //нужно что нибудь придумать чтоб кнопка обновить не появлялась когда урл с номером цытаты
 // echo "string";
}

?>


<script>
  $('#getRequestA').click( function() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
          url: '/excerptions',
          type: 'POST',
          data: {_token: CSRF_TOKEN},
          //data:{gege: danet},
          dataType: 'json',
          success: function (data) {
      $("#excerption")[0].innerHTML = data.text;
      $("#author")[0].innerHTML = data.author;
      $("#link")[0].innerHTML = '#'+data.id;
      $("#link").attr('href','{{URL::route('excerptions')}}/'+data.id);
      yaCounter25400348.reachGoal('ex'); return true;
        }     
        });
    });
</script>