var skipCounter = 0;
var limit = 10;

function sendRequest(suggestionId) {
  ajax(`/send-request/${suggestionId}`, 'GET', 'getSuggestions')
}

function getRequests() {
  ajax(`/requests?limit=${limit}`, 'GET', 'requestsIndex')
}

function requestsIndex(exampleVariable, response) {
  let selectedTab = $('input[name="btnradio"]:checked').val();

  if (selectedTab == 'sent')
    $('#content').html(response[0]['data']);
  else if (selectedTab == 'received')
    $('#content').html(response[1]['data']);


  $('#get_sent_requests_btn').html(`Sent Requests ( ${response[0]['total']} )`);
  $('#get_received_requests_btn').html(`Received Requests ( ${response[1]['total']} )`);
}

function withdrawRequest(requestId) {
  ajax(`/withdraw-request/${requestId}`, 'GET', 'reRender')
}


function acceptRequest(requestId) {
  ajax(`/accept-request/${requestId}`, 'GET', 'reRender')
}

function getSuggestions() {
  ajax(`/suggestions?limit=${limit}`, 'GET', 'suggestionsIndex')
}

function suggestionsIndex(exampleVariable, response) {
  if ($('input[name="btnradio"]:checked').val() == 'suggestions')
    $('#content').html(response['data']);

  $('#get_suggestions_btn').html(`Suggestions ( ${response['total']} )`);

  response['total'] < limit
    ? $("#load_more_btn_parent").addClass('d-none')
    : $("#load_more_btn_parent").removeClass('d-none');

  getRequests();
  getConnections();
}

function getConnections() {
  ajax(`/connections?limit=${limit}`, 'GET', 'connectionsIndex')
}

function connectionsIndex(exampleVariable, response) {
  if ($('input[name="btnradio"]:checked').val() == 'connections')
    $('#content').html(response['data']);

  $('#get_connections_btn').html(`Connections ( ${response['total']} )`);
}

function removeConnection(connectionId) {
  ajax(`/connections/${connectionId}`, 'DELETE', 'reRender')
}


function getMoreConnections() {
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function getConnectionsInCommon(userId, connectionId) {
  // your code here...
}

function getMoreConnectionsInCommon(userId, connectionId) {
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function getMoreSuggestions() {
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function getMoreRequests(mode) {
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function reRender() {
  getSuggestions();
}

$(function () {
  reRender()
});

function loadMore() {
  limit += 10;

  getSuggestions();
}


$(document).ajaxStop(function () {
  $("#skeleton").addClass('d-none')
  $("#content").removeClass('d-none')
});

function render(type) {
  $("#content").addClass('d-none')
  $("#skeleton").removeClass('d-none')

  if (type == 'suggestions')
    getSuggestions()
  else if (type == 'sent-requests' || type == 'received-requests')
    getRequests()
  else if (type == 'connections')
    getConnections()
}