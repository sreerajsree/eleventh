<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('brands.store') }}" method="post">
                    @csrf
                    <div class="row gy-4  p-4 p-xl-5">
                        <div class="col-12">
                            <label for="brand" class="form-label">Select Brand</label>
                            <select name="brand" id="brand" class="form-control">
                                <option value="Ecommerce | Phone Cases">Ecommerce | Phone Cases</option>
                                <option value="Ecommerce | Clothing">Ecommerce | Clothing</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn text-white bg-black btn-lg" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
