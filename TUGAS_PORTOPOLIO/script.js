function openPortfolio() {
    $('#welcome-screen').addClass('screen-up');
    $('#main-content').fadeIn(1000);
    setTimeout(() => { 
        AOS.init({ duration: 1000, once: true });
        $('#welcome-screen').hide(); 
    }, 1000);
}

function lihatDetail(proyekKey) {
    // Aktifkan modal
    const modal = $("#project-modal");
    const body = $("body");

    modal.addClass("active").fadeIn(300);
    body.addClass("no-scroll");
    
    $("#modal-body").html("<div style='text-align:center; padding:20px;'>Memuat detail...</div>");

    $.ajax({
        type: "GET",
        url: "detail.php",
        data: { period: proyekKey },
        success: function(response) {
            $("#modal-body").html(response);
        },
        error: function() {
            $("#modal-body").html("<p>Gagal memuat data.</p>");
        }
    });
}

function closeDetail() {
    $("#project-modal").removeClass("active").fadeOut(300);
    $("body").removeClass("no-scroll");
}

// Tutup modal kalau klik di luar kotak putih
$(window).on('click', function(e) {
    if ($(e.target).is('#project-modal')) {
        closeDetail();
    }
});

// --- FUNGSI EASTER EGG NANJAK ---
function nanjakPopOut() {
    const modal = $("#project-modal");
    const body = $("body");

    // Tampilkan overlay
    modal.addClass("active").fadeIn(300);
    body.addClass("no-scroll");
    
    $("#modal-body").html(`
        <div class="nanjak-content">
            <div class="nanjak-icon">⛰️</div>
            <h3>Ayok nanjak bareng! :)</h3>
            <p>Puncak Prau, Merbabu, atau Lawu? <br>Kabarin aja kalau mau Summit!</p>
            <button class="gunung-btn" onclick="closeDetail()">Gasss!</button>
        </div>
    `);

    $(".close-modal").hide();
}

function closeDetail() {
    $("#project-modal").removeClass("active").fadeOut(300);
    $("body").removeClass("no-scroll");
    
    setTimeout(() => {
        $(".close-modal").show();
    }, 300);
}