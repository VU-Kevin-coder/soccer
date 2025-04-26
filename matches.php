<?php include('inc/header.php') ?>

    <main>

    <section class="page-header">
            <div class="container">
                <h1>Matches & Fixtures</h1>
                <p>Follow our journey through the season</p>
            </div>
        </section>

        <section class="matches-section">
            <div class="container">
                <div class="matches-tabs">
                    <button class="tab-btn active" data-tab="fixtures">Upcoming Fixtures</button>
                    <button class="tab-btn" data-tab="results">Match Results</button>
                </div>

                <!-- Fixtures Tab Content -->
                <div class="tab-content active" id="fixtures">
                    <div class="matches-filter">
                        <select id="competition-filter">
                            <option value="all">All Competitions</option>
                            <option value="premier-league">Premier League</option>
                            <option value="champions-league">Champions League</option>
                            <option value="fa-cup">FA Cup</option>
                            <option value="league-cup">League Cup</option>
                        </select>
                        <select id="month-filter">
                            <option value="all">All Months</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <!-- Add more months as needed -->
                        </select>
                    </div>

                    <div class="matches-grid">
                        <!-- Match 1 -->
                        <div class="match-card" data-competition="premier-league" data-month="september">
                            <div class="match-date">
                                <span class="day">15</span>
                                <span class="month">Sep</span>
                                <span class="time">15:00</span>
                            </div>
                            <div class="match-teams">
                                <div class="team">
                                    <img src="images/logo.png" alt="United FC">
                                    <span>United FC</span>
                                </div>
                                <div class="vs">vs</div>
                                <div class="team">
                                    <img src="images/hunters.png" alt="City FC">
                                    <span>City FC</span>
                                </div>
                            </div>
                            <div class="match-info">
                                <span class="competition">Premier League</span>
                                <span class="venue">Old Trafford</span>
                                <a href="#" class="btn">Buy Tickets</a>
                            </div>
                        </div>

                        <!-- Match 2 -->
                        <div class="match-card" data-competition="champions-league" data-month="september">
                            <div class="match-date">
                                <span class="day">20</span>
                                <span class="month">Sep</span>
                                <span class="time">20:00</span>
                            </div>
                            <div class="match-teams">
                                <div class="team">
                                    <img src="images/logo.png" alt="United FC">
                                    <span>United FC</span>
                                </div>
                                <div class="vs">vs</div>
                                <div class="team">
                                    <img src="images/hunters.png" alt="Madrid FC">
                                    <span>Madrid FC</span>
                                </div>
                            </div>
                            <div class="match-info">
                                <span class="competition">Champions League</span>
                                <span class="venue">Old Trafford</span>
                                <a href="#" class="btn">Buy Tickets</a>
                            </div>
                        </div>

                        <!-- Add more fixture cards as needed -->
                    </div>
                </div>

                <!-- Results Tab Content -->
                <div class="tab-content" id="results">
                    <div class="matches-filter">
                        <select id="results-competition-filter">
                            <option value="all">All Competitions</option>
                            <option value="premier-league">Premier League</option>
                            <option value="champions-league">Champions League</option>
                            <option value="fa-cup">FA Cup</option>
                            <option value="league-cup">League Cup</option>
                        </select>
                        <select id="results-month-filter">
                            <option value="all">All Months</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <!-- Add more months as needed -->
                        </select>
                    </div>

                    <div class="matches-grid">
                        <!-- Match 1 -->
                        <div class="match-card result" data-competition="premier-league" data-month="august">
                            <div class="match-date">
                                <span class="day">12</span>
                                <span class="month">Aug</span>
                            </div>
                            <div class="match-teams">
                                <div class="team">
                                    <img src="images/logo.png" alt="United FC">
                                    <span>United FC</span>
                                </div>
                                <div class="score">
                                    <span class="home-score">2</span>
                                    <span>-</span>
                                    <span class="away-score">1</span>
                                </div>
                                <div class="team">
                                    <img src="images/hunters.png" alt="Town FC">
                                    <span>Town FC</span>
                                </div>
                            </div>
                            <div class="match-info">
                                <span class="competition">Premier League</span>
                                <span class="venue">Old Trafford</span>
                                <a href="single-blog.html" class="btn">Match Report</a>
                                <a href="#" class="btn btn-secondary">Highlights</a>
                            </div>
                        </div>

                        <!-- Match 2 -->
                        <div class="match-card result" data-competition="premier-league" data-month="august">
                            <div class="match-date">
                                <span class="day">19</span>
                                <span class="month">Aug</span>
                            </div>
                            <div class="match-teams">
                                <div class="team">
                                    <img src="images/hunters.png" alt="Rovers FC">
                                    <span>Rovers FC</span>
                                </div>
                                <div class="score">
                                    <span class="home-score">0</span>
                                    <span>-</span>
                                    <span class="away-score">3</span>
                                </div>
                                <div class="team">
                                    <img src="images/logo.png" alt="United FC">
                                    <span>United FC</span>
                                </div>
                            </div>
                            <div class="match-info">
                                <span class="competition">Premier League</span>
                                <span class="venue">Ewood Park</span>
                                <a href="single-blog.html" class="btn">Match Report</a>
                                <a href="#" class="btn btn-secondary">Highlights</a>
                            </div>
                        </div>

                        <!-- Add more result cards as needed -->
                    </div>
                </div>
            </div>
        </section>

    </main>
<script>
    // Matches Page Functionality
function initMatchesPage() {
    if (!document.querySelector('.matches-section')) return;
    
    // Tab switching
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked button and corresponding content
            btn.classList.add('active');
            const tabId = btn.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // Filter functionality for fixtures
    const competitionFilter = document.getElementById('competition-filter');
    const monthFilter = document.getElementById('month-filter');
    
    if (competitionFilter && monthFilter) {
        competitionFilter.addEventListener('change', filterMatches);
        monthFilter.addEventListener('change', filterMatches);
    }
    
    // Filter functionality for results
    const resultsCompetitionFilter = document.getElementById('results-competition-filter');
    const resultsMonthFilter = document.getElementById('results-month-filter');
    
    if (resultsCompetitionFilter && resultsMonthFilter) {
        resultsCompetitionFilter.addEventListener('change', filterResults);
        resultsMonthFilter.addEventListener('change', filterResults);
    }
    
    function filterMatches() {
        const competition = competitionFilter.value;
        const month = monthFilter.value;
        const matchCards = document.querySelectorAll('#fixtures .match-card');
        
        matchCards.forEach(card => {
            const cardCompetition = card.getAttribute('data-competition');
            const cardMonth = card.getAttribute('data-month');
            
            const showCompetition = competition === 'all' || competition === cardCompetition;
            const showMonth = month === 'all' || month === cardMonth;
            
            if (showCompetition && showMonth) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    function filterResults() {
        const competition = resultsCompetitionFilter.value;
        const month = resultsMonthFilter.value;
        const matchCards = document.querySelectorAll('#results .match-card');
        
        matchCards.forEach(card => {
            const cardCompetition = card.getAttribute('data-competition');
            const cardMonth = card.getAttribute('data-month');
            
            const showCompetition = competition === 'all' || competition === cardCompetition;
            const showMonth = month === 'all' || month === cardMonth;
            
            if (showCompetition && showMonth) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
}

// Call the function when the page loads
document.addEventListener('DOMContentLoaded', initMatchesPage);
</script>
<?php include('inc/footer.php') ?>