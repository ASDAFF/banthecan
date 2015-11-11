/**
 * Created by and on 4-May-15.
 */

function ticketDetailView(id) {

    $('#ajax-loader').removeClass('hidden').addClass('show');
    $('#right-layout-sidebar .container-fluid .ticket-view').addClass('ticket-detail-opaque');

    $.ajax({
        url: '/ticket/view',
        type: "get",
        data: {
            'id': id
        },
        success: function(returnData) {
            $('#ajax-loader').removeClass('show').addClass('hidden');
            $('#right-layout-sidebar .container-fluid').html(returnData.ticketViewHtml);
            $('#right-layout-sidebar .container-fluid .ticket-view').removeClass('ticket-detail-opaque');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#ajax-loader').removeClass('show').addClass('hidden');
            $('#right-layout-sidebar .container-fluid .ticket-view').removeClass('ticket-detail-opaque');
            alert("Ticket View Failure: " + textStatus + ': ' + errorThrown);
        }
    });
}
