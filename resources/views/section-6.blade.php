<style>
    .course-schedule-container {
  background-color: #121212; /* negro oscuro */
  height: 100%;
  padding: 2rem 3rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.schedule-badge {
  display: inline-flex;
  background-color: #FFD700; /* amarillo */
  max-width: 30%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  padding: 0.5 1rem;

}


.schedule-title {
  color: #FFD700; 
  font-weight: 900;
  text-transform: uppercase;
  margin-bottom: 2rem;
}

.schedule-row {
  display: flex;
  justify-content: space-between;
  padding: 0.5rem 0;
  color: #FFD700;
  text-transform: uppercase;
  font-weight: 600;
}

.border-bottom {
  border-bottom: 1px solid #FFD700;
}

.schedule-day {
  margin: 0;
}

.schedule-time {
  margin: 0;
}

.schedule-closed {
  color: #FFC107; /* amarillo un poco más suave */
  font-weight: 700;
}

</style>

<!-- Horario del Curso de Arte Digital Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-0">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="h-100">
          <img class="img-fluid h-100" src="img/open.jpg" alt="Curso de Arte Digital" />
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="course-schedule-container">
          <p class="schedule-badge">HORARIO DEL CURSO</p>
          <h1 class="schedule-title">Profesores Expertos Te Esperan</h1>
          <div>
            <div class="schedule-row border-bottom">
              <h6 class="schedule-day">Lunes</h6>
              <span class="schedule-time">18:00 - 21:00</span>
            </div>
            <div class="schedule-row border-bottom">
              <h6 class="schedule-day">Martes</h6>
              <span class="schedule-time">18:00 - 21:00</span>
            </div>
            <div class="schedule-row border-bottom">
              <h6 class="schedule-day">Miércoles</h6>
              <span class="schedule-time">18:00 - 21:00</span>
            </div>
            <div class="schedule-row border-bottom">
              <h6 class="schedule-day">Jueves</h6>
              <span class="schedule-time">18:00 - 21:00</span>
            </div>
            <div class="schedule-row border-bottom">
              <h6 class="schedule-day">Viernes</h6>
              <span class="schedule-time">18:00 - 21:00</span>
            </div>
            <div class="schedule-row">
              <h6 class="schedule-day">Sábados y Domingos</h6>
              <span class="schedule-closed">Cerrado</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Horario del Curso de Arte Digital End -->

