<script>
    function calculateGPA(mark){
        switch (true) {
            case mark >= 80:
                return 'A+';
            case mark >= 70:
                return 'A';
            case mark >= 60:
                return 'A-';
            case mark >= 50:
                return 'B';
            case mark >= 40:
                return 'C';
            case mark >= 0:
                return 'F';
            default:
                return '';
        }
    }
</script>
