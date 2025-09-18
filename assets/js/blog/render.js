function renderCourseDetails() {
  // Get URL parameter (?id=...)
  const params = new URLSearchParams(window.location.search);
  const courseId = params.get("id");

  // Find the course by ID
  const course = courses.find((c) => c.id === courseId);

  // Select container
  const container = document.getElementById("course-details");

  if (course) {
    container.innerHTML = `

  <div class="page-single event-single">
    <div class="page-img style2 global-img mb-35">
      <img src="${course.image}" alt="${course.title}" />
    </div>
    <div class="event-wrapp">
      <h2 class="h5 mb-10">${course.title}</h2>
      <div class="blog-meta d-flex align-items-center">
        <div class="me-3">
          <i class="fa-solid fa-user-graduate me-1"></i> ${course.enrolled}
        </div>
        <div class="me-3">
          <i class="fa-regular fa-clock me-1"></i> ${course.duration}
        </div>
      </div>

      <div class="btn-group mt-40">
        <a href="contact.html" class="th-btn">
          <span class="btn-text" data-back="Enroll Now" data-front="Enroll Now"></span>
        </a>
      </div>

      <div class="event-organizer">
        <h4 class="box-title">Course Details</h4>
        <span class="text">
          <span class="fw-bold text-title">Days:</span> ${course.days}
        </span>
        <span class="text">
          <span class="fw-bold text-title">Class Time:</span> ${
            course.classTime
          }
        </span>
        <span class="text">
          <span class="fw-bold text-title">Total Weekly Hours:</span> ${
            course.weeklyHours
          }
        </span>
        <span class="text">
          <span class="fw-bold text-title">Language:</span> ${course.language}
        </span>
      </div>
    </div>

    <div class="page-content">
      <blockquote class="event-blockquote">
        <p>${course.description}</p>
      </blockquote>

      <h4>Here’s what it covers and why it’s important:</h4>

      <h5>Purpose</h5>
      <ul class="blog-text fs-18">
        ${(course.purpose || []).map((item) => `<li>${item}</li>`).join("")}
      </ul>

      <h5>Key Features</h5>
      <ol class="blog-text fs-18">
        ${(course.keyFeatures || []).map((item) => `<li>${item}</li>`).join("")}
      </ol>

      <h5>Importance</h5>
      <ul class="blog-text fs-18">
        ${(course.importance || []).map((item) => `<li>${item}</li>`).join("")}
      </ul>
    </div>
  </div>

    `;
  } else {
    container.innerHTML = `<p>Course not found. Please go back to <a href="courses.html">courses</a>.</p>`;
  }
}

// Call function when page loads
window.onload = renderCourseDetails;
