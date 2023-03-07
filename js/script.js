$(function (){
   
    $('#hitung_total').click(function(){

        var nama_wisata = $('#tempat_wisata').val()
        var jml_pengunjung = $('#jml_pengunjung').val()
        var pengunjung_anak = $('#pengunjung_anak').val()

        $.ajax({
            url:'api/read_wisata.php',
            type:'POST',
            dataType:'json',
            data:{
                    tempat_wisata:nama_wisata,
                    jml_pengunjung:jml_pengunjung,
                    pengunjung_anak:pengunjung_anak
                },
            success: function (resp){
                console.log('respon:',resp)
                if(resp.message){
                    alert(resp.message)
                }else{
                    // untuk label gunakan text()
                    $('#total_bayar').text(resp.total_format)
                   // untuk input gunakan val() 
                    $('#total').val(resp.total) 
                    $('#potongan_harga').val(resp.potongan_harga) 
                }
             }    
        })
    })


 })

