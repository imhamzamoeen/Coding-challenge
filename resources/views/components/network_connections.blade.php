<div class="row justify-content-center mt-5">
    <div class="col-12">
        <div class="card shadow  text-white bg-dark">
            <div class="card-header">Coding Challenge - Network connections</div>
            <div class="card-body">
                <div class="btn-group w-100 mb-3" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="suggestions"
                        autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1" id="get_suggestions_btn"
                        onclick="render('suggestions')">-</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="sent"
                        autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2" id="get_sent_requests_btn"
                        onclick="render('sent-requests')">-</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" value="received"
                        autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3" id="get_received_requests_btn"
                        onclick="render('received-requests')">-</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" value="connections"
                        autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio4" id="get_connections_btn"
                        onclick="render('connections')">-</label>
                </div>
                <hr>

                <div id="content" class="d-none"></div>

                <div id="skeleton" class="">
                    @for ($i = 0; $i < 10; $i++)
                        <x-skeleton />
                    @endfor
                </div>

                <div class="d-flex justify-content-center mt-2 py-3 {{-- d-none --}}" id="load_more_btn_parent">
                    <button class="btn btn-primary" id="load_more_btn" onclick="loadMore()">Load
                        more</button>
                </div>
            </div>
        </div>
    </div>
</div>
