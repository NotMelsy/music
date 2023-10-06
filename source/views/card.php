<div>
    <div>
        <p>
            <?php
            echo $single['artist'];
            echo '</br>';
            echo $single['title'];
            ?>
        </p>
        <div>
            <div>
                <button class="button" href="https://open.spotify.com/playlist/0Ssj09iM0aygCJNLkwjaQd?si=f8e19dd41a3a49d4">Listen</button>
            </div>
            <p>
                <?php 
                echo $single['time'];
                echo '</br>';
                echo $single['genre'];
                echo '</br>';
                echo $single['year'];
                ?>
            </p>
        </div>
    </div>
</div>