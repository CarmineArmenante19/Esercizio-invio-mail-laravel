<x-layout>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{route('submit')}}">
                    @csrf
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Nome e cognome</label>
                    <input name="nome" type="text" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Perchè vuoi lavorare con noi</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
