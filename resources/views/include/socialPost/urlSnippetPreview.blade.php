<div>
	<a href="{{$data['url']}}" target="_blank">
		@if(array_key_exists('image',$data))
			<div id="postRichCardSnippetImg">
				<img src="{{$data['image']}}">
				{{-- <img src="{{$data['image']?$data['image']:}}"> --}}
			</div>
		@endif
		<div id="postRichCardSnippetContainer">
			<span id="postRichCardSnippetBrandName">{{$data['site_name']}}</span>
			<br>
			<span id="postRichCardSnippetTitle">{{$data['title']}}</span>
			<br>
			<span id="postRichCardSnippetDescription" >{{$data['description']}}</span>
		</div>
	</a>
</div>



{{-- 

<div>
	<a href="https://www.groovenexus.com/tete-a-tete-with-dj-donnaa/" target="_blank">
		<div id="postRichCardSnippetImg">
			<img src="https://www.groovenexus.com/wp-content/uploads/2019/02/Tête-à-Tête-with-DJ-Donnaal-1.jpg ">
		</div>
		<div id="postRichCardSnippetContainer">
			<span id="postRichCardSnippetBrandName">Groovenexus.com</span>
			<br>
			<span id="postRichCardSnippetTitle">Tête-À-Tête With DJ Donnaa - GrooveNexus</span>
			<br>
			<span id="postRichCardSnippetDescription" >GrooveNexus is in conversation with DJ Donnaa, a prolific performer and a </span>
		</div>
	</a>
</div> --}}