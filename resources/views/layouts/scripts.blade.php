<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    CKEDITOR.replace('content');

    function previewImage(input) {
        console.log(input.files);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("img").src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            document.getElementById("img").src = e.target.result;
        }
    }

    function convertToSlug(string) {
        return string.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
    }
</script>
@stack('scripts')
