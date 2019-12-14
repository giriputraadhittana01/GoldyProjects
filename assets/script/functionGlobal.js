function customAlert(icn,ttl,txt)
{
  Swal.fire({
    icon: icn,
    title: ttl,
    text: txt
  })
}
function customModal(ttl,msg,img)
{ 
  Swal.fire({
    title: ttl,
    text: msg,
    imageUrl: img,
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: 'Custom image'
  })
}
