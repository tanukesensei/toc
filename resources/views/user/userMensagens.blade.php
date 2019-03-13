@extends('layouts.dashboard')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div id="page-wrap">

          <h2>jQuery/PHP Chat</h2>

          <p id="name-area"></p>

          <div id="chat-wrap"><div id="chat-area"></div></div>

          <form id="send-message-area">
              <p>Your message: </p>
              <textarea id="sendie" maxlength = '100'></textarea>
          </form>

      </div>
    </div>
  </div>
</div>

@endsection
