require('./bootstrap');

const messages_el = document.getElementById('messages');
const username_input = document.getElementById('username');
const message_input =  document.getElementById('message_input');
const message_form =   document.getElementById('message_form');

message_form.addEventListener('submit', function(e){
	e.preventDefault();
	let has_errors = false;

	if (username_input.value == ''){
		alert('Прошу, введите имя');
		has_errors = true;
	}

	if (message_input.value == ''){
		alert('Прошу, введите сообщение');
		has_errors = true;
	}

	if(has_errors){
		return;
	}
	console.log(message_input.value);
	let options = {
		method: 'post',
		url: '/sender',
		data:{
			author: username_input.value,
			text: message_input.value
		}
	}
	axios(options);
});

Pusher.logToConsole = true;

    var pusher = new Pusher('e000682911aa003fa69b', {
      cluster: 'ap2'
    });
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      messages_el.innerHTML += '<p class="pt-1 mb-0 border-bottom"><strong>' + data['author'] + '  </strong>' + data['text'] + '</p>';
    });