# Expense Splitter Application

## Description

The Expense Splitter application is designed to help users manage shared expenses among friends, family, or colleagues. It allows users to create groups, add expenses, split costs, and track who owes whom. The application aims to simplify the process of managing shared expenses and ensure transparency and fairness in cost-sharing.

## Key Features

- **User Authentication and Profile Management:** Users can sign up, log in, and manage their profiles.
- **Group Creation and Management:** Users can create groups for different events or purposes (e.g., trips, dinners, shared apartments).
- **Expense Entry and Splitting:** Users can add expenses, specify the amount, and select the group members involved. The application will automatically split the expenses among the members.
- **Debt Tracking and Settlement:** The application tracks who owes whom and provides options for settling debts.
- **Notifications and Reminders:** Users receive notifications and reminders about pending debts and new expenses.

## User Stories

### User Registration and Login

- As a user, I want to register an account so that I can use the application.
- As a user, I want to log in to my account so that I can access my groups and expenses.

### Profile Management

- As a user, I want to update my profile information so that my details are accurate.
- As a user, I want to change my password so that my account remains secure.

### Group Creation and Management

- As a user, I want to create a new group so that I can manage expenses for a specific event or purpose.
- As a user, I want to invite other users to my group so that we can share expenses.
- As a user, I want to view a list of all my groups so that I can manage them easily.

### Adding and Splitting Expenses

- As a user, I want to add a new expense to a group so that the cost can be shared among the members.
- As a user, I want to specify the amount and description of the expense so that it is clear what the expense is for.
- As a user, I want to select the group members involved in the expense so that the cost is split correctly.

### Viewing and Managing Expenses

- As a user, I want to view a list of all expenses in a group so that I can see what has been spent.
- As a user, I want to see how much each member owes or is owed so that I can keep track of debts.

### Debt Tracking and Settlement

- As a user, I want to view a summary of who owes whom so that I can understand the financial situation.
- As a user, I want to mark debts as settled so that the records are up to date.
- As a user, I want to receive notifications about pending debts so that I can settle them promptly.

### Notifications and Reminders

- As a user, I want to receive notifications when a new expense is added to a group so that I am aware of new costs.
- As a user, I want to receive reminders about pending debts so that I can settle them on time.

## Implementation Tech-stack 

- **Backend:** Laravel for the backend, and MySQL for the database.
- **Frontend:** Blade for the frontend, and integrate Tailwind CSS for styling.
- **APIs:** ~~Utilize financial APIs if needed for currency conversion or other financial data.~~

## Tailwind CSS Focus

- **Flexbox and Grid:** Use flexbox and grid to create responsive layouts for the group management, expense entry, and debt tracking pages.
- **Components:** Create reusable components for forms, lists, and notifications to ensure a consistent design.
- **Responsive Design:** Ensure the application is fully responsive and works well on both desktop and mobile devices.
