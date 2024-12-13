function displayImage(base64Image) {
    imageContainer.innerHTML = ''; // Clears current image
    const imgElement = document.createElement('img');
    imgElement.src = `data:image/jpeg;base64,${base64Image}`;
    imageContainer.appendChild(imgElement); // Appends new image
}
