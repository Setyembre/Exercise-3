function showDetails(memberId) {
    // This function could display more details about the team member
    alert("More details about " + memberId);
}
document.getElementById("facebookButton").addEventListener("click", function() {
    window.location.href = "https://www.facebook.com/johnfel.dinamarupok22/"; // Replace 'yourprofile' with your actual Facebook profile URL
});
function redirectToFacebook(url) {
    window.location.href = url;
}
