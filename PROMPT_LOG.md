# PROMPT LOG

This document records all prompts the user actually entered during the development of the portfolio project, in the order they were used, start to finish, together with the report of the agent (Big Pickle).

---

### Task: [Starting the Project]
* Prompt used: "implement greatplan.md"
* Result/Output: Big Pickle read greatplan.md to understand the requirements and resume.md as the source data. It scaffolded a Laravel v13 project, installed Tailwind CSS via Vite, built a dark-mode portfolio with Basic Information, Educational Background, Projects, and GitHub Repository Links sections, created README.md and PROMPT_LOG.md, tested the app (HTTP 200, no build errors), and committed everything to a standalone git repository.

---

### Task: [Deciding the Push Target]
* Prompt used: (Answer to Big Pickle's question on where to push) "Push to github.com/benabeseeajen (Recommended)"
* Result/Output: It reported that it could not create/push a repo under benabeseeajen with the current credentials and asked how to proceed.

---

### Task: [Reauthenticating to the Portfolio Account]
* Prompt used: "reauthenticate to benabeseeajen-hue"
* Result/Output: Big Pickle ran "gh auth login --hostname github.com --git-protocol https --web". The user completed the one-time device code at github.com/login/device. Big Pickle verified via "gh api user" that the active account is benabeseeajen-hue — Eajen Rainier S. Benabese from Bangued, Abra. It created the public repository github.com/benabeseeajen-hue/portfolio, ran "gh auth setup-git", and pushed the main branch successfully. All GitHub profile links were corrected to the real account (the resume's "github.com/benabeseeajen" account does not exist).

---

### Task: [Adding the Prompt Log]
* Prompt used: "update prompt logs with the actual prompts used"
* Result/Output: Big Pickle rewrote PROMPT_LOG.md and regenerated PROMPT_LOG.docx to reflect the actual prompts used during the session.

---

### Task: [Refining the Prompt Log]
* Prompt used: "rewrite with the actual prompts I put in"
* Result/Output: Big Pickle confirmed that the terms recorded are the user's own inputs, not reconstructed theme prompts. It rewrote the logs to list each prompt exactly as the user typed it ("implement greatplan.md" and the user's responses), in the order used, start to finish.
