<h1 class="text-center mb-5">Add a pokemon</h1>
<form action="/store" method="post">
    @csrf
    <div class="mb-3 container w-50">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput" name="name">
    </div>
    <div class="mb-3 container w-50">
        <label for="exampleFormControlInput1" class="form-label">Level</label>
        <input type="number" class="form-control" id="exampleFormControlInput" name="level">
    </div>
    <div class="mb-3 container w-50">
        <select class="form-select" aria-label="Default select example" name="type">
            <option selected>Type</option>
            <option value="Psychic">Psychic</option>
            <option value="Grass">Grass</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
            <option value="Normal">Normal</option>
        </select>
    </div>
    <div class="mb-3 container w-50">
        <label for="exampleFormControlInput1" class="form-label">Url</label>
        <input type="text" class="form-control" id="exampleFormControlInput" name="url">
    </div>
    <button type="submit">Send</button>
</form>
