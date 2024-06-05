@foreach ($suggestions as $suggestion)
    <div class="my-2 shadow  text-white bg-dark p-1" id="">
        <div class="d-flex justify-content-between">
            <table class="ms-1">
                <td class="align-middle">{{ $suggestion->name }}</td>
                <td class="align-middle"> - </td>
                <td class="align-middle">{{ $suggestion->email }}</td>
                <td class="align-middle">
            </table>
            <div>
                <button class="btn btn-primary send-request me-1" onclick="sendRequest('{{ $suggestion->id }}')">
                    Connect
                </button>
            </div>
        </div>
    </div>
@endforeach
