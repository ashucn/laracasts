<template>
<article class="message">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</article>
</template>

<script>
	export default {
		data () {
			return {
				message: 'hello vue!!!'
			};
		},
		created() {
			console.log('about creaated!!');
		}
	}
</script>

<style lang="scss">
	.notification {
		background: #f0f0f0;
	}
</style>