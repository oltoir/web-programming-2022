# Contributing

## Merge Request Process

1. Repositories might have 3 major branches: `dev`, `stage` and `master`. Ensure that you created your new branch from `dev` branch and open `Merge Request (MR)` to the remote `dev` branch.
2. The name of your branch should explain what you're doing:
   - If you are going to create new component or implement new features for existing component, name your branch `feat/component-name`;
   - If you are going to write styles for component, name your branch `style/component-name`;
   - If you are going to fix bugs in component, name your branch `fix/component-name`;
   - If you are going to increase performance by making some optimizations for component, name your branch `perf/component-name`;
   - If you are going to refactor code in component, name your branch `refactor/component-name`;
   - If you are going to write some tests to component, name your branch `test/component-name`;
   - If you are going to write documentation for the code in component, name your branch `docs/component-name`;
   - For other minor changes like changing some text in component, name your branch `chore/component-name`;
3. Don't make changes which are not related to the component written in your branch: if your branch is `feat/header`, changes in your branch must be related to `Header` component. Don't make changes to `Footer` or other components in your `feat/header` branch, create new branch `feat/footer` or `feat/component-name` for this.
4. It is preferable to make your commits as small as possible, remember that you might have more than one commits in one `MR`. For example, if you are creating `Header` component in `feat/header` branch, you can make multiple commits describing each step during implementation:
   `feat(header): create logo component`
   `feat(header): create navbar`
   `style(header): make navbar adaptive`
   `feat(header): implement light/dark modes` and so on. It is better than committing hundreds lines of code in one commit. However, don't forget that commits should be logically chained and meaningful, don't make commits like `feat(header): add some empty lines`, `feat(header): add some console.logs`, `feat(header): remove console.logs from previous commit`, and so on.
5. Write correctly structured and meaningful commit messages. For checking is structure of commit message correct or not we use [@commitlint/config-conventional](https://github.com/conventional-changelog/commitlint/tree/master/%40commitlint/config-conventional) plugin, but meaningfulness of commit message is responsibility of developer.
6. Don't forget to make pull from remote branch. If you're going to create `MR` to the `dev` branch, run `git pull origin dev --rebase` before pushing your branch. Read more about [git rebase](https://git-scm.com/docs/git-rebase).
7. Mark the Project Maintainer as `Assignee` when you're opening `MR`.
8. If you get comments from Project Maintainer related to your `MR`, fix them and push to your branch.
9. Sometimes comments might be minor and there might be no reason to write new commit message. In such cases you can use `git commit --amend --no-edit` and `git push origin branch-name --force`. However, before doing so, please, read about [Rewriting History in GIT](https://git-scm.com/book/en/v2/Git-Tools-Rewriting-History).
10. If your changes have `eslint errors`, they will not be committed because of `pre-commit` hook. Keep calm, just fix `eslint errors` in your code and commit your changes.
