<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="modal-dialog">
        <div class="modal-content">
          <form wire:submit = "logout">
              <div style="background-color: #2A2A2A !important" class="modal-header">
                  <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Adios!!</h1>
                  <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Want to Logout?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-danger">Yes</button>
              </div>
          </form>
        </div>
    </div>
</div>
