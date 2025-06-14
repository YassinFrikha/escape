<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<!-- Include stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

<!-- Create the editor container -->
<div id="editor">
<h3>🏕️ Trip Details</h3>
      <ul>
        <li><strong>👥 Capacity:</strong> Max 30 campers</li>
        <li><strong>Minimum Age:</strong> 12+</li>
        <li><strong>Accommodation:</strong> Shared tents (2–3 per tent)</li>
        <li>
          <strong>Guides:</strong> 2 locals + 1 certified first-aid team member
        </li>
      </ul>

      <h3>📅 Program (2 Days / 1 Night)</h3>

      <h4>🗓️ Day 1: Arrival & Coastal Discovery</h4>
      <ul>
        <li>09:00 – Departure from Tunis</li>
        <li>10:00 – Arrival in Gammarth & campsite setup</li>
        <li>11:30 – Welcome briefing & light refreshments</li>
        <li>13:00 – Picnic lunch under the pine trees</li>
        <li>14:30 – Guided hike through Gammarth’s coastal trails</li>
        <li>17:00 – Free time at the beach (swimming or paddleball)</li>
        <li>19:00 – Seafood barbecue dinner by the sea</li>
        <li>21:00 – Bonfire, storytelling & stargazing session</li>
      </ul>

      <h4>🗓️ Day 2: Nature & Culture</h4>
      <ul>
        <li>07:30 – Sunrise beach yoga</li>
        <li>08:30 – Traditional breakfast with local pastries</li>
        <li>10:00 – Visit nearby ruins (Carthage or La Marsa heritage site)</li>
        <li>12:00 – Nature talk & eco-awareness games</li>
        <li>13:30 – Group picnic lunch</li>
        <li>14:30 – Pack up & return to Tunis</li>
        <li>16:00 – Arrival back in Tunis</li>
      </ul>

      <h3>🧗 Activities</h3>
      <ul>
        <li>Coastal hiking & exploration</li>
        <li>Swimming & beach games</li>
        <li>Bonfire & stargazing</li>
        <li>Historical site visit (La Marsa or Carthage)</li>
        <li>Eco-awareness activities</li>
        <li>Morning yoga & relaxation</li>
      </ul>

      <h3>🧗 Activities</h3>
      <ul>
        <li>Scenic hiking</li>
        <li>Swimming & sunbathing</li>
        <li>Kayaking & snorkeling</li>
        <li>Campfire cooking</li>
        <li>Photography & bird watching</li>
        <li>Eco-awareness games</li>
      </ul>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>

</body>
</html>
