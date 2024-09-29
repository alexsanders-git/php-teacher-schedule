<h2 class="mb-2 text-center">Create schedule:</h2>
<form action="actions/create-subject.php" method="post" class="mb-5">
    <div class="mb-3">
        <label for="day" class="form-label">Day of the week:</label>
        <select id="day" class="form-select" name="day" aria-label="Day of the week">
            <option selected>Select the day</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject:</label>
        <select id="subject" class="form-select" name="subject" aria-label="School subjects">
            <option selected>Select the subject</option>
            <option value="Math">Math</option>
            <option value="English">English</option>
            <option value="Science">Science</option>
            <option value="History">History</option>
            <option value="Physical Education">Physical Education</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>