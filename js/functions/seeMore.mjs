export function seeMore(){
    const currentIndex = document.querySelector('.carousel-inner .carousel-item.active');
    const currentID = currentIndex.id;
    console.log(currentID);
    window.location.href = `/pages/${currentID}.html`;
}