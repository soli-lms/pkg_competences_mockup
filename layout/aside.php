<li class="nav-item has-treeview">
            <a href="#"
              class="nav-link <?php echo (strpos($current_route, 'Gestion des briefs') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-laptop-code"></i>
            
              <p>
                Gestion des compétences
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/GestionCompetences/Modules/index.php"
                  class="nav-link <?php echo (strpos($current_route, 'Réalisations') !== false) ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-laptop-code"></i>
                  <p>Modules</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/GestionCompetences/Competences/index.php"
                  class="nav-link <?php echo (strpos($current_route, 'Réalisations') !== false) ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-laptop-code"></i>
                  <p>Compétence</p>
                </a>
              </li>
            </ul>
</li>