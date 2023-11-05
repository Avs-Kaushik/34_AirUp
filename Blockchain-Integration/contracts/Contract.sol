// SPDX-License-Identifier: MIT
pragma solidity ^0.8.9;

contract IdeaStorage {
    address public owner;
    uint256 public ideaCount;

    struct Idea {
        address entrepreneur_id;
        string ideaName;
        string problemStatement;
        string oneLinerSolution;
        string detailedSolution;
        uint256 timestamp;
    }

    mapping(uint256 => Idea) public ideas;

    event IdeaSubmitted(address indexed entrepreneur_id, uint256 indexed ideaId);

    modifier onlyOwner() {
        require(msg.sender == owner, "Only contract owner can perform this action");
        _;
    }

    constructor() {
        owner = msg.sender;
    }

    function submitIdea(
        string memory _ideaName,
        string memory _problemStatement,
        string memory _oneLinerSolution,
        string memory _detailedSolution
    ) public {
        ideaCount++;
        ideas[ideaCount] = Idea({
            entrepreneur_id: msg.sender,
            ideaName: _ideaName,
            problemStatement: _problemStatement,
            oneLinerSolution: _oneLinerSolution,
            detailedSolution: _detailedSolution,
            timestamp: block.timestamp
        });

        emit IdeaSubmitted(msg.sender, ideaCount);
    }

    function getIdea(uint256 _ideaId) public view returns (
        address,
        string memory,
        string memory,
        string memory,
        string memory,
        uint256
    ) {
        require(_ideaId <= ideaCount, "Idea does not exist");
        Idea memory idea = ideas[_ideaId];
        return (
            idea.entrepreneur_id,
            idea.ideaName,
            idea.problemStatement,
            idea.oneLinerSolution,
            idea.detailedSolution,
            idea.timestamp
        );
    }
}
