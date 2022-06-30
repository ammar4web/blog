<form action="/posts/{{ $post->id }}/comments" method="POST">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">الاسم:</label>
      <input name="name" type="text" id="name" class="form-control">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">التعليق:</label>
      <textarea name="body" id="body" class="form-control" style="height: 100px" placeholder="اترك تعليقك هنا"></textarea>
      {{-- <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp"> --}}
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>
    <button type="submit" class="btn btn-primary my-2">حفظ</button>
  </form>